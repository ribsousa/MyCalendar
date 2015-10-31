<?php namespace KurtJensen\MyCalendar\Components;

use Auth;
use Cms\Classes\ComponentBase;
use KurtJensen\MyCalendar\Models\Category as MyCalCategory;
use KurtJensen\MyCalendar\Models\Event as MyCalEvent;

class EventForm extends ComponentBase {
	public $myevents;
	public $myevent;
	public $categorylist;
	public $user;

	public function componentDetails() {
		return [
			'name' => 'EventForm Component',
			'description' => 'Front end form to allow users to ad their own events',
		];
	}

	public function defineProperties() {
		return [];
	}

	public function init() {
		$this->user = Auth::getUser();

		if (!$this->user) {
			return null;
		}
	}

	public function onRun() {
		$this->addJs('/modules/backend/formwidgets/datepicker/assets/js/build-min.js');
		$this->addCss('/modules/backend/formwidgets/datepicker/assets/css/datepicker.css');
		$this->addCss('/modules/backend/formwidgets/datepicker/assets/vendor/pikaday/css/pikaday.css');
		$this->myevents = $this->page['myevents'] = $this->loadEvents();
	}

	protected function loadEvents() {
		if (!$this->user->id) {
			return null;
		}

		$myevents = MyCalEvent::where('user_id', '=', $this->user->id)->get();
		return $myevents;
	}

	protected function getMyEvent() {
		if (!$this->user->id) {
			return null;
		}

		$eventId = post('id');

		if (!$eventId) {
			$myevent = new MyCalEvent();
			$myevent->user_id = $this->user->id;
		} else {
			$myevent = MyCalEvent::where('user_id', '=', $this->user->id)->find($eventId);
		}

		return $myevent;
	}

	protected function onEventForm() {
		if (!$myevent = $this->getMyEvent()) {
			return null;
		}

		$this->categorylist = $this->page['categorylist'] = MyCalCategory::selector(
			0,
			array('class' => 'form-control custom-select',
				'id' => 'Form-field-myeventone-provider_id')
		);

		$this->myevent = $this->page['myevent'] = $myevent;

		//$this->page['datefield'] = Form::date('name');
	}

	/**
	 * Update the myeventone
	 */
	public function onUpdateEvent() {
		if (!$myevent = $this->getMyEvent()) {
			return null;
		}
/*
id
user_id
name
day
month
year
text
is_published
 */
		$myevent->name = post('name');
		list($myevent->year, $myevent->month, $myevent->day) = post('date');
		$myevent->is_published = post('is_published');
		$myevent->save();

		$this->onRun();
	}

	protected function onDelete() {
		$eventId = post('id');

		if (!($eventId && $this->user)) {
			return null;
		}

		$myevent = myeventone::where('user_id', '=', $this->userid)->find($eventId);

		$myevent->delete();

		$this->onRun();
	}

}
