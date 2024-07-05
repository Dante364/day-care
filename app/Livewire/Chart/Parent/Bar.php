<?php

namespace App\Livewire\Chart\Parent;

use Livewire\Component;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;

class Bar extends Component
{
    public $data;

    public function mount()
    {
        $this->data = $this->attendanceChart();
    }


    public function attendanceChart()
{
    // Fetch attendance records and categorize them
    $presentCount = Attendance::where('status', 'present')->count();
    $absentCount = Attendance::where('status', 'absent')->count();
    $lateCount = Attendance::where('status', 'late')->count(); // Assuming 'late' is a valid status

    // Prepare the data in the specified format
    $data = [
        'labels' => ['Present', 'Absent'],
        'data' => [$presentCount, $absentCount],
    ];

    return $data;
}

    public function render()
    {
        return view('livewire.chart.parent.bar', ['data' => $this->data]);
    }
}