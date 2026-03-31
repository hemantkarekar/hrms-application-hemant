<?php

class Attendance
{
    public $employee, $attendance, $payroll;

    public function initiate($employee, $attendance)
    {
        $this->$attendance = $attendance;


        
        $this->$employee = $employee;
        $punch = [];
        $p = 0;
        $l = 0;
        $h_d = 0;
        $t = [
            "h" => 0,
            "m" => 0,
        ];
        foreach ($attendance as $key => $day) {
            $s = new DateTime("{$day['attendance_date']} {$day['timepunchIn']}");
            $e = new DateTime("{$day['attendance_date']} {$day['timepunchOut']}");
            $d = $s->diff($e);
            // Work Hours Incomplete
            $t['h'] += $d->h;
            $t['m'] += $d->i;
            if ($d->h <= 8) {
                // 8 Hours
                if ($d->i < 50) {
                    // Less Than 8:50 Hours
                    $h_d++;
                    echo "Half Day: " .  "{$d->h} Hours {$d->i} Minutes" . "<br>";
                }
            }

            //Late Arrivals
            if ($day['timepunchIn'] > "11:00:00") {
                $l++;
                echo "Late Mark: " .  $day['timepunchIn'] . "<br>";
            }
            // print_r($d);
        }
        // die;

        $this->payroll['present_days'] = count($attendance);
        $this->payroll['total_hours'] = floor($t['h'] + ($t['m'] / 60));
        $this->payroll['incomplete'] = $h_d;
        $this->payroll['latemarks'] = $l;

        return $this;
    }

    public function process($month = NULL)
    {
        if ($month === NULL) {
            $month = date("m-Y");
        }

        return $this;
    }
}
