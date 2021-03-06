<?php namespace KurtJensen\MyCalendar\Components;

use Cms\Classes\ComponentBase;
use Lang;

class EvList extends ComponentBase {
	public $month;
	public $year;
	public $dayprops;
	public $color;
	public $events;
	public $calHeadings;

	public $monthTitle;
	public $monthNum;
	public $running_day;
	public $days_in_month;
	public $dayPointer;

	public function componentDetails() {
		return [
			'name' => 'kurtjensen.mycalendar::lang.evlist.comp_name',
			'description' => 'kurtjensen.mycalendar::lang.evlist.description',
		];
	}

	public function defineProperties() {
		return [
			'month' => [
				'title' => 'kurtjensen.mycalendar::lang.evlist.month_title',
				'description' => 'kurtjensen.mycalendar::lang.evlist.month_description',
			],
			'year' => [
				'title' => 'kurtjensen.mycalendar::lang.evlist.year_title',
				'description' => 'kurtjensen.mycalendar::lang.evlist.year_description',
			],
			'events' => [
				'title' => 'kurtjensen.mycalendar::lang.evlist.events_title',
				'description' => 'kurtjensen.mycalendar::lang.evlist.events_description',
			],
			'color' => [
				'title' => 'kurtjensen.mycalendar::lang.evlist.color_title',
				'description' => 'kurtjensen.mycalendar::lang.evlist.color_description',
				'type' => 'dropdown',
				'default' => 'kurtjensen.mycalendar::lang.evlist.color_default',
			],
			'loadstyle' => [
				'title' => 'kurtjensen.mycalendar::lang.evlist.loadstyle_title',
				'description' => 'kurtjensen.mycalendar::lang.evlist.loadstyle_description',
				'type' => 'dropdown',
				'default' => '1',
				'options' => [0 => 'kurtjensen.mycalendar::lang.evlist.opt_no', 1 => 'kurtjensen.mycalendar::lang.evlist.opt_yes'],
			],
		];
	}

	public function getColorOptions() {
		return ['red' => Lang::get('kurtjensen.mycalendar::lang.evlist.color_red'),
        		'green' => Lang::get('kurtjensen.mycalendar::lang.evlist.color_green'),
            		'blue' => Lang::get('kurtjensen.mycalendar::lang.evlist.color_blue'),
            		'yellow' => Lang::get('kurtjensen.mycalendar::lang.evlist.color_yellow'),
        		];
	}

	public function onRender() {
		if ($this->property('loadstyle')) {
			$this->addCss('/plugins/kurtjensen/mycalendar/assets/css/calendar.css');
		}

		$this->month = $this->property('month', date('m'));
		$this->year = $this->property('year', date('Y'));
		$this->calcElements();
		$this->dayprops = $this->property('dayprops');
		$this->color = $this->property('color');
		$this->events = $this->property('events');
	}

	public function calcElements() {

		$this->calHeadings = [
	            Lang::get('kurtjensen.mycalendar::lang.evlist.day_sun'),
	            Lang::get('kurtjensen.mycalendar::lang.evlist.day_mon'),
	            Lang::get('kurtjensen.mycalendar::lang.evlist.day_tue'),
	            Lang::get('kurtjensen.mycalendar::lang.evlist.day_wed'),
	            Lang::get('kurtjensen.mycalendar::lang.evlist.day_thu'),
	            Lang::get('kurtjensen.mycalendar::lang.evlist.day_fri'),
	            Lang::get('kurtjensen.mycalendar::lang.evlist.day_sat'),
	        ];
		$time = strtotime($this->month . '/1/' . $this->year);
		$this->monthTitle = date('M', $time);
		$this->monthNum = date('n', $time);
		$this->running_day = date('w', $time);
		$this->days_in_month = date('t', $time);
		$this->dayPointer = 0 - $this->running_day;
	}

}
