<?php namespace KurtJensen\MyCalendar\Models;

use Model;
use RainLab\User\Models\User as UserModel;
use System\Classes\PluginManager;

/**
 * event Model
 */
class Event extends Model {

	/**
	 * @var string The database table used by the model.
	 */
	public $table = 'kurtjensen_mycal_events';

	/**
	 * @var array Guarded fields
	 */
	protected $guarded = [];

	/**
	 * @var array Fillable fields
	 */
	protected $fillable = ['*'];

	/**
	 * @var array Relations
	 */
/*
public $belongsTo = [
'user' => ['RainLab\User\Models\User',
'key' => 'user_id',
'otherKey' => 'id'],
];
 */
	public $belongsToMany = [
		'categorys' => ['KurtJensen\MyCalendar\Models\Category',
			'table' => 'kurtjensen_mycal_categorys_events',
			'key' => 'event_id',
			'otherKey' => 'category_id',
		],
	];
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
	public $attributes = [
		'date' => '',
		'human_time' => '',
	];

	public function getDateAttribute() {
		if (!$this->year) {
			return date('Y-m-d');
		}

		return $this->year . '-' . $this->month . '-' . $this->day;
	}

	public function getHumanTimeAttribute() {
		if (!$this->time) {
			return '';
		}
		list($h, $m) = explode(':', $this->time);
		$time = ($h > 12 ? ($h - 12) : intval($h)) . ':' . $m . ($h > 11 ? 'pm' : 'am');
		return $time;
	}

	public function beforeSave() {
		list($this->year, $this->month, $this->day) = explode('-', $this->attributes['date']);

		unset($this->attributes['date'], $this->attributes['human_time']);
	}

	public function getDayOptions($month) {
		if ($this->month && $this->year) {
			$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $this->month, $this->year);
			$days = range(1, $daysInMonth);
			return array_combine($days, $days);
		}
		return [0 => 'kurtjensen.mycalendar::lang.event.error_pick_month_year'];
	}

	public function getMonthOptions() {
		$months = ['0', 'kurtjensen.mycalendar::lang.event.month_jan', 'kurtjensen.mycalendar::lang.event.month_feb', 'kurtjensen.mycalendar::lang.event.month_mar', 'kurtjensen.mycalendar::lang.event.month_apr', 'kurtjensen.mycalendar::lang.event.month_may', 'kurtjensen.mycalendar::lang.event.month_jun', 'kurtjensen.mycalendar::lang.event.month_jul', 'kurtjensen.mycalendar::lang.event.month_aug', 'kurtjensen.mycalendar::lang.event.month_sep', 'kurtjensen.mycalendar::lang.event.month_oct', 'kurtjensen.mycalendar::lang.event.month_nov', 'kurtjensen.mycalendar::lang.event.month_dec'];
		unset($months[0]);
		return $months;
	}

	public function getYearOptions() {
		$year = date('Y');
		$years = range($year, $year + 5);
		return array_combine($years, $years);
	}

	public function getUserIdOptions($keyValue = null) {
		$manager = PluginManager::instance();
		if ($manager->exists('rainlab.user')) {
			foreach (UserModel::orderBy('surname')->
				orderBy('name')->get() as $user) {
				$Users[$user->id] = $user->surname . ', ' . $user->name;
			}

			return $Users;
		}
		return [0 => 'kurtjensen.mycalendar::lang.event.error_user_model'];
	}

}
