<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
    ">
</head>
<body>
<div class="container">
    @if (empty($data))
    <th>No transaction</th>

    @else


    <table class="table table-striped table-bordered table-hover">
        <thead class="bg-primary text-light">
          <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Amount</th>
            <th>Transaction ID</th>
            <th>Status</th>
            <th>Type</th>
            <th>Created At</th>
            <th>Actions:</th>

          </tr>
        </thead>
        <tbody>
            @foreach ( $data as $datas)
          <tr>
            <td>{{ $datas->id}}</td>
            <td>{{ $datas->id_user }}</td>
            <td>{{ $datas->montant }}</td>
            <td>{{ $datas->txid }}</td>
            <td><span class="badge bg-warning">waiting</span></td>
            @if ( $datas->type =='0' )
            <td>Deposit</td>
            @else
            <td>withdraw</td>
            @endif

            <td>{{ $datas->created_at }}</td>
            <td>{{ $datas->created_at }}</td>
            <td><button type="button" class="btn btn-success accept-btn" data-amount="{{ $datas->montant }}" data-user="{{ $datas->id_user }}" id="{{ $datas->id }}">Accept</button>
                <button type="button" class="btn btn-danger decline-btn" data-user="{{ $datas->id_user }}" data-amount="{{ $datas->montant }}" id="{{ $datas->id }}">Decline</button></td>
          </tr>
          @endforeach

        </tbody>
    </table>
    @endif
</div>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

    $(document).ready(function() {
      $('.accept-btn').click(function() {
        var id = $(this).attr('id');
        var amount = $(this).data('amount');
        var id_user = $(this).data('user');
        $.ajax({
          type: "POST",
          url: "/addfunds",
          headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
          data: {
            id: id,
            amount: amount,
            id_user: id_user,
            action: 'accept'
          },
          success: function(data) {
            // Handle success response here
            console.log(data);
          },
          error: function(xhr, status, error) {
            // Handle error response here
            console.log(xhr.responseText);
          }
        });
      });

      $('.decline-btn').click(function() {
        var id = $(this).attr('id');
        var amount = $(this).data('amount');
        var id_user = $(this).data('user');
        $.ajax({
          type: "POST",
          url: "/addfunds",
          headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
          data: {
            id: id,
            amount: amount,
            id_user: id_user,
            action: 'decline'
          },
          success: function(data) {
            // Handle success response here
            console.log(data);
          },
          error: function(xhr, status, error) {
            // Handle error response here
            console.log(xhr.responseText);
          }
        });
      });
    });
  </script>

</html>
