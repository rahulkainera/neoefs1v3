@extends('app')
@section('content')
    <h1>Mutualfund </h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Mutualfund Symbol</td>
                <td><?php echo ($mutualfund['category']); ?></td>
            </tr>
            <tr>
                <td>Mutualfund Name</td>
                <td><?php echo ($mutualfund['description']); ?></td>
            </tr>
            <tr>
                <td>Number of Shares</td>
                <td><?php echo ($mutualfund['acquired_value']); ?></td>
            </tr>
            <tr>
                <td>Purchase Price </td>
                <td><?php echo ($mutualfund['acquired_date']); ?></td>
            </tr>
            <tr>
                <td>Date Purchased</td>
                <td><?php echo ($mutualfund['recent_value']); ?></td>
            </tr>
            <tr>
                <td>Date Purchased</td>
                <td><?php echo ($mutualfund['recent_date']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
@stop
