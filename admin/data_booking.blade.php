<!DOCTYPE html>

<head>
    @include('admin.css')
    <style>
        th {
            color: rgb(255, 255, 255);
        }
        .description-container {
            position: relative;
        }
        .description-summary {
            display: block;
        }
        .description-text {
            display: none;
            /* Sembunyikan teks lengkap secara default */
        }
        .read-more {
            display: block;
            color: rgb(205, 205, 216);
            cursor: pointer;
            text-decoration: underline;
        }
        .read-more.active {
            color: red;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var readMoreLinks = document.querySelectorAll('.read-more');

            readMoreLinks.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    var container = this.parentElement;
                    var text = container.querySelector('.description-text');
                    var summary = container.querySelector('.description-summary');

                    if (text.style.display === 'none') {
                        text.style.display = 'block';
                        summary.style.display = 'none';
                        this.textContent = 'Read Less';
                    } else {
                        text.style.display = 'none';
                        summary.style.display = 'block';
                        this.textContent = 'Read More';
                    }
                });
            });
        });
    </script>
</head>
<body>
    @include('admin.header')
    @include('admin.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Room ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telpon</th>
                            <th scope="col">Status</th>
                            <th scope="col">Start dDate</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Update</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookings as $booking)

                        <tr>
                            <td>{{$booking->room_id}}</td>
                            <td>{{$booking->nama}}</td>
                            <td>{{$booking->email}}</td>
                            <td>{{$booking->telepon}}</td>
                            <td>{{$booking->status}}</td>
                            <td>{{$booking->start_date}}</td>
                            <td>{{$booking->end_date}}</td>
                            
                            <td>
                                <a class="btn btn-outline-warning" href="{{ url('booking_update',$booking->id) }}">update</a>
                            </td>
                            <td>
                                <a onclink="return confirm('Apakah anda ingin menghapus kamar yang sudah di booking')" class="btn btn-outline-danger" href="{{ url('booking_delete',$booking->id) }}">delete</a>
                            </td>
                        </tr> 
                        @endforeach
                    </tbody>         
                </table>
            </div>
        </div>
    </div>
    @include('admin.footer')
</body>

</html>