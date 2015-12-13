<?php namespace KurtJensen\MyCalendar\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Page;
use KurtJensen\MyCalendar\Models\Event as MyEvents;

class Event extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'kurtjensen.mycalendar::lang.event.comp_name',
            'description' => 'kurtjensen.mycalendar::lang.event.description',
        ];
    }

    public function defineProperties()
    {
        return [
            'slug' => [
                'title' => 'kurtjensen.mycalendar::lang.event.slug_title',
                'description' => 'kurtjensen.mycalendar::lang.event.slug_description',
                'default' => '{{ :slug }}',
                'type' => 'string',
            ],
            'link_page' => [
                'title' => 'kurtjensen.mycalendar::lang.event.linkpage_title',
                'description' => 'kurtjensen.mycalendar::lang.event.linkpage_desc',
                'type' => 'dropdown',
                'default' => 'cal/events',
                'group' => 'kurtjensen.mycalendar::lang.linkpage_group',
            ],
        ];
    }

    public function getLinkPageOptions()
    {
        return Page::sortBy('baseFileName')->lists('baseFileName', 'baseFileName');
    }

    public function onRun()
    {
        $this->page['ev'] = $this->loadEvents();
        $this->page['backLink'] = $this->property('link_page', '');
    }

    public function loadEvents()
    {
        $slug = $this->property('slug');
        if (!$e = MyEvents::where('is_published', true)->find($slug)) {
            return 'kurtjensen.mycalendar::lang.event.error_not_found';
        }

        $maxLen = $this->property('title_max', 100);

        $link = $e->link ? $e->link : '';
        return ['name' => $e->name, 'date' => $e->date, 'time' => $e->human_time, 'link' => $link, 'text' => $e->text];
    }
}
