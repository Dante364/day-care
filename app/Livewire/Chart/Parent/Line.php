<?php

namespace App\Livewire\Chart\Parent;

use Livewire\Component;
use App\Models\Attendance;
use Illuminate\Support\Facades\DB;

class Line extends Component
{
    public $attendanceData;

    public function mount()
    {
        $this->fetchAttendanceData();
    }

    public function fetchAttendanceData()
    {
        $attendanceRecords = Attendance::select([
                DB::raw('DATE(date) as date'),
                DB::raw('COUNT(*) as total'),
                'status'
            ])
            ->groupBy('date', 'status')
            ->orderBy('date', 'asc')
            ->get();

        $formattedData = [
            'labels' => [],
            'data' => [
                'Present' => [],
                'Absent' => [],
            ],
        ];

        foreach ($attendanceRecords as $record) {
            $formattedData['labels'][] = $record->date;
            $formattedData['data'][$record->status][] = $record->total;
        }

        // Ensure labels are unique
        $formattedData['labels'] = array_unique($formattedData['labels']);

        $this->attendanceData = $formattedData;
    }

    public function render()
    {
        return view('livewire.chart.parent.line', [
            'attendanceData' => $this->attendanceData
        ]);
    }
}
