@extends('app')
@section('content')
    <h1>Investment </h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Investment Symbol</td>
                <td><?php echo ($investment['category']); ?></td>
            </tr>
            <tr>
                <td>Investment Name</td>
                <td><?php echo ($investment['description']); ?></td>
            </tr>
            <tr>
                <td>Number of Shares</td>
                <td><?php echo ($investment['acquired_value']); ?></td>
            </tr>
            <tr>
                <td>Purchase Price </td>
                <td><?php echo ($investment['acquired_date']); ?></td>
            </tr>
            <tr>
                <td>Date Purchased</td>
                <td><?php echo ($investment['recent_value']); ?></td>
            </tr>
            <tr>
                <td>Date Purchased</td>
                <td><?php echo ($investment['recent_date']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
@stop
