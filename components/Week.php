<?php namespace KurtJensen\MyCalendar\Components;

use Cms\Classes\ComponentBase;

class Week extends ComponentBase {
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
			'name' => 'kurtjensen.mycalendar::lang.week.name',
			'description' => 'kurtjensen.mycalendar::lang.week.description',
		];
	}

	public function defineProperties() {
		return [
			'month' => [
				'title' => 'kurtjensen.mycalendar::lang.month.month_title',
				'description' => 'kurtjensen.mycalendar::lang.month.month_description',
			],
			'year' => [
				'title' => 'kurtjensen.mycalendar::lang.month.year_title',
				'description' => 'kurtjensen.mycalendar::lang.month.year_description',
			],
			'events' => [
				'title' => 'kurtjensen.mycalendar::lang.month.events_title',
				'description' => 'kurtjensen.mycalendar::lang.month.events_description',
			],
			'color' => [
				'title' => 'kurtjensen.mycalendar::lang.month.color_title',
				'description' => 'kurtjensen.mycalendar::lang.month.color_description',
				'type' => 'dropdown',
				'default' => 'kurtjensen.mycalendar::lang.evlist.color_default',
			],
			'dayprops' => [
				'title' => 'kurtjensen.mycalendar::lang.month.dayprops_title',
				'description' => 'kurtjensen.mycalendar::lang.month.dayprops_description',
			],
			'loadstyle' => [
				'title' => 'kurtjensen.mycalendar::lang.month.loadstyle_title',
				'description' => 'kurtjensen.mycalendar::lang.month.loadstyle_description',
				'type' => 'dropdown',
				'default' => '1',
				'options' => [0 => 'kurtjensen.mycalendar::lang.month.opt_no', 1 => 'kurtjensen.mycalendar::lang.month.opt_yes'],
			],
		];
	}

	public function getColorOptions() {
		return ['red' => 'kurtjensen.mycalendar::lang.evlist.color_red', 'green' => 'kurtjensen.mycalendar::lang.evlist.color_green', 'blue' => 'kurtjensen.mycalendar::lang.evlist.color_blue', 'yellow' => 'kurtjensen.mycalendar::lang.evlist.color_yellow'];
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

		$this->calHeadings = ['kurtjensen.mycalendar::lang.evlist.day_sun', 'kurtjensen.mycalendar::lang.evlist.day_mon', 'kurtjensen.mycalendar::lang.evlist.day_tue', 'kurtjensen.mycalendar::lang.evlist.day_wed', 'kurtjensen.mycalendar::lang.evlist.day_thu', 'kurtjensen.mycalendar::lang.evlist.day_fri', 'kurtjensen.mycalendar::lang.evlist.day_sat'];
		$time = strtotime($this->month . '/1/' . $this->year);
		$this->monthTitle = date('F', $time);
		$this->monthNum = date('n', $time);
		$this->running_day = date('w', $time);
		$this->days_in_month = date('t', $time);
		$this->dayPointer = 0 - $this->running_day;
	}

}
