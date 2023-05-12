@extends('layout')

@section('title')
    Dashboard
@endsection

@section ('content')
<main>
    <table>
        <tr id="tableheader">
            <th>Quartile</th>
            <th>Course</th>
            <th>EC</th>
            <th>Exam</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td rowspan="3">1</td>
            <td>PCO</td>
            <td>2,5</td>
            <td>Assesment</td>
            <td>-</td>
        </tr>
        <tr>
            <td>CSB</td>
            <td>5</td>
            <td>Written exam</td>
            <td>-</td>
        </tr>
        <tr>
            <td>PB</td>
            <td>5</td>
            <td>Case study</td>
            <td>-</td>
        </tr>
        <tr>
            <td rowspan="2">2</td>
            <td rowspan="2">OOP</td>
            <td rowspan="2">10</td>
            <td>Case study (50%)</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Project(50%)</td>
            <td>-</td>
        </tr>
        <tr>
            <td rowspan="4">3</td>
            <td>Framework Development 1</td>
            <td>5</td>
            <td>Case study</td>
            <td>-</td>
        </tr>
        <tr>
            <td rowspan="3">Framework Project 1</td>
            <td rowspan="3">7,5</td>
            <td>Project(33%)</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Case Study Exam(33%)</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Report(33%)</td>
            <td>-</td>
        </tr>
        <tr>
            <td rowspan="3">4</td>
            <td rowspan="3">Framework Project 2</td>
            <td rowspan="3">10</td>
            <td>Portfolio(50%)</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Project(25%)</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Assesment(25%)</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Year 1</td>
            <td>PPD</td>
            <td>12,5</td>
            <td>Portfolio</td>
            <td>-</td>
        </tr>
        <tr>
            <td rowspan="2">Whenever</td>
            <td>Personality 1</td>
            <td>1,25</td>
            <td>Portfolio</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Personality 2</td>
            <td>1,25</td>
            <td>Portfolio</td>
            <td>-</td>
        </tr>
    </table>
    <div class="progressbar">
        <div class="progress"></div>
    </div>
    <p id="nbsa">NBSA boundary = 45 EC</p>
</main>
@endsection