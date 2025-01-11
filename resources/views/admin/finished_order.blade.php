<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
        table {
            border:1px solid #F85C70;
            margin:auto;
            width:750px;
        }

        th {
            color:black;
            font-weight:bold;
            font-size:18px;
            text-align:center;
            background-color:#F85C70;
            padding:5px;
        }

        td {
            color:white;
            font-weight:bold;
            text-align:center;
            padding:5px;
        }

        .order {
            border:1px solid #F85C70;
            margin:auto;
            width:500px;
            padding:30px;
        }

        h1 {
            color:white;
        }

        h3 {
            color:#F85C70;
        }
    </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
    @include('admin.sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            
            <table>
                <tr>
                    <th>Order No.</th>
                    <th>Status</th>
                    <th>Delivery Status</th>
                    <th></th>
                </tr>
                @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->delivery_status }}</td>
                    <td>
                        <button class="btn btn-info" onclick="showOrderDetails({{ $order->id }})">View Details</button>
                    </td>
                </tr>
                @endforeach
            </table>
            <br>
            <div id="order-details" style="display: none;" class="order">
                <h1>Order Details</h1>
                <div id="order-content"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
    <script>
        function showOrderDetails(orderId) {
            // Hide all order details first
            document.getElementById('order-details').style.display = 'none';
            document.getElementById('order-content').innerHTML = '';

            // Fetch the details for the selected order
            const order = @json($orders);

            // Find the selected order
            const selectedOrder = order.find(o => o.id === orderId);

            if (selectedOrder) {
                // Build the details HTML
                let detailsHtml = `
                    <p><strong>Recipient:</strong> ${selectedOrder.name}</p>
                    <p><strong>User:</strong> ${selectedOrder.user?.name || 'N/A'}</p>
                    <p><strong>Location:</strong> ${selectedOrder.location?.name || 'N/A'}</p>
                    <p><strong>Total Price:</strong> ₱${parseFloat(selectedOrder.total_price).toFixed(2)}</p>
                    <p><strong>Status:</strong> ${selectedOrder.status}</p>
                    <p><strong>Delivery Status:</strong> ${selectedOrder.delivery_status}</p>
                    <p><strong>Delivery Time:</strong> ${(new Date(selectedOrder.updated_at)).toDateString()}</p>
                    <h4>Items</h4>
                    <ul>
                `;

                selectedOrder.items.forEach(item => {
                    detailsHtml += `
                        <li>
                            ${item.food?.title || 'Deleted Food Item'} - 
                            Quantity: ${item.quantity} - 
                            Price: ₱${parseFloat(item.price).toFixed(2)}
                        </li>
                    `;
                });

                detailsHtml += '</ul>';

                // Update the details section
                document.getElementById('order-content').innerHTML = detailsHtml;
                document.getElementById('order-details').style.display = 'block';
            }
        }
    </script>


  </body>
</html>