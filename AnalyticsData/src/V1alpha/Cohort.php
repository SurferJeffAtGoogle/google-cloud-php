<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto

namespace Google\Analytics\Data\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines a cohort. A cohort is a group of users who share a common
 * characteristic. For example, all users with the same acquisition date
 * belong to the same cohort.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.Cohort</code>
 */
class Cohort extends \Google\Protobuf\Internal\Message
{
    /**
     * Assigns a name to this cohort. The dimension `cohort` is valued to this
     * name in a report response. If set, cannot begin with `cohort_` or
     * `RESERVED_`. If not set, cohorts are named by their zero based index
     * `cohort_0`, `cohort_1`, etc.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The dimension used by cohort. Only supports `firstTouchDate` for retention
     * report.
     *
     * Generated from protobuf field <code>string dimension = 2;</code>
     */
    private $dimension = '';
    /**
     * The cohort selects users whose first visit date is between start date
     * and end date defined in the `dateRange`. In a cohort request, this
     * `dateRange` is required and the `dateRanges` in the `RunReportRequest` or
     * `RunPivotReportRequest` must be unspecified.
     * The date range should be aligned with the cohort's granularity. If
     * CohortsRange uses daily granularity, the date range can be aligned to any
     * day. If CohortsRange uses weekly granularity, the date range should be
     * aligned to the week boundary, starting at Sunday and ending Saturday. If
     * CohortsRange uses monthly granularity, the date range should be aligned to
     * the month, starting at the first and ending on the last day of the month.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.DateRange date_range = 3;</code>
     */
    private $date_range = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Assigns a name to this cohort. The dimension `cohort` is valued to this
     *           name in a report response. If set, cannot begin with `cohort_` or
     *           `RESERVED_`. If not set, cohorts are named by their zero based index
     *           `cohort_0`, `cohort_1`, etc.
     *     @type string $dimension
     *           The dimension used by cohort. Only supports `firstTouchDate` for retention
     *           report.
     *     @type \Google\Analytics\Data\V1alpha\DateRange $date_range
     *           The cohort selects users whose first visit date is between start date
     *           and end date defined in the `dateRange`. In a cohort request, this
     *           `dateRange` is required and the `dateRanges` in the `RunReportRequest` or
     *           `RunPivotReportRequest` must be unspecified.
     *           The date range should be aligned with the cohort's granularity. If
     *           CohortsRange uses daily granularity, the date range can be aligned to any
     *           day. If CohortsRange uses weekly granularity, the date range should be
     *           aligned to the week boundary, starting at Sunday and ending Saturday. If
     *           CohortsRange uses monthly granularity, the date range should be aligned to
     *           the month, starting at the first and ending on the last day of the month.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Data\V1Alpha\Data::initOnce();
        parent::__construct($data);
    }

    /**
     * Assigns a name to this cohort. The dimension `cohort` is valued to this
     * name in a report response. If set, cannot begin with `cohort_` or
     * `RESERVED_`. If not set, cohorts are named by their zero based index
     * `cohort_0`, `cohort_1`, etc.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Assigns a name to this cohort. The dimension `cohort` is valued to this
     * name in a report response. If set, cannot begin with `cohort_` or
     * `RESERVED_`. If not set, cohorts are named by their zero based index
     * `cohort_0`, `cohort_1`, etc.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The dimension used by cohort. Only supports `firstTouchDate` for retention
     * report.
     *
     * Generated from protobuf field <code>string dimension = 2;</code>
     * @return string
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * The dimension used by cohort. Only supports `firstTouchDate` for retention
     * report.
     *
     * Generated from protobuf field <code>string dimension = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDimension($var)
    {
        GPBUtil::checkString($var, True);
        $this->dimension = $var;

        return $this;
    }

    /**
     * The cohort selects users whose first visit date is between start date
     * and end date defined in the `dateRange`. In a cohort request, this
     * `dateRange` is required and the `dateRanges` in the `RunReportRequest` or
     * `RunPivotReportRequest` must be unspecified.
     * The date range should be aligned with the cohort's granularity. If
     * CohortsRange uses daily granularity, the date range can be aligned to any
     * day. If CohortsRange uses weekly granularity, the date range should be
     * aligned to the week boundary, starting at Sunday and ending Saturday. If
     * CohortsRange uses monthly granularity, the date range should be aligned to
     * the month, starting at the first and ending on the last day of the month.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.DateRange date_range = 3;</code>
     * @return \Google\Analytics\Data\V1alpha\DateRange
     */
    public function getDateRange()
    {
        return isset($this->date_range) ? $this->date_range : null;
    }

    public function hasDateRange()
    {
        return isset($this->date_range);
    }

    public function clearDateRange()
    {
        unset($this->date_range);
    }

    /**
     * The cohort selects users whose first visit date is between start date
     * and end date defined in the `dateRange`. In a cohort request, this
     * `dateRange` is required and the `dateRanges` in the `RunReportRequest` or
     * `RunPivotReportRequest` must be unspecified.
     * The date range should be aligned with the cohort's granularity. If
     * CohortsRange uses daily granularity, the date range can be aligned to any
     * day. If CohortsRange uses weekly granularity, the date range should be
     * aligned to the week boundary, starting at Sunday and ending Saturday. If
     * CohortsRange uses monthly granularity, the date range should be aligned to
     * the month, starting at the first and ending on the last day of the month.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.DateRange date_range = 3;</code>
     * @param \Google\Analytics\Data\V1alpha\DateRange $var
     * @return $this
     */
    public function setDateRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Data\V1alpha\DateRange::class);
        $this->date_range = $var;

        return $this;
    }

}
