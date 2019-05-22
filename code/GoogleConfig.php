<?php

namespace BigforkGoogleAnalytics;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\LiteralField;
use SilverStripe\Forms\Tab;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\ORM\DataExtension;

class GoogleConfig extends DataExtension
{
    private static $db = [
        'GoogleAnalyticsTrackingID' => 'Varchar',
        'GoogleAnalyticsParameters' => 'Text',
        'GoogleAnalyticsConstructorParameters' => 'Text'
    ];

    /**
     * @inheritdoc
     */
    public function updateCMSFields(FieldList $fields)
    {
        $analyticsFields = FieldList::create(
            LiteralField::create('', '<div class="message warning">Tracking will be output using gtag.js</div>'),
            TextField::create("GoogleAnalyticsTrackingID", "Google Analytics Tracking ID")
                ->setDescription("e.g. UA-XXXXXX-X"),
            TextareaField::create("GoogleAnalyticsConstructorParameters", "Additional Configuration")
                ->setDescription("<strong>Advanced users only.</strong>
					An object to be passed as an argument to gtag config. If you do not know what this field does, please leave it blank. "),
            TextareaField::create("GoogleAnalyticsParameters", "Additional Google Analytics Properties")
                ->setDescription("<strong>Advanced users only.</strong>
					 Insert additional code after the initial gtag config. If you do not know what this does, please leave this field blank.")
        );

        $fields->addFieldToTab('Root', Tab::create('GoogleAnalytics')->setChildren($analyticsFields));
    }
}
