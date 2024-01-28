<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }} {{Auth::guard('web')->user()->name}}
        </h2>
    </x-slot>


 <div class="container mt-3">
        <h2>Supplier Dashboard</h2>
        <h3 style="font-size: 25px; padding-top:15px;padding-bottom:15px;">Products <a
            class="btn btn-success"
            href="{{ url('supplier/createproduct') }}">Add</a></h3>


        <table class="table table-dark table-striped">
            <thead>
                <td style="padding: 30px;">Title</td>
                <td style="padding: 30px;">Description</td>
                <td style="padding: 30px;">price</td>
                <td style="padding: 30px;">Category</td>
                <td style="padding: 30px;">status</td>
                <td style="padding: 20px;">Update</td>
                <td style="padding: 20px;">Delete</td>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr style="background-color:rgba(22, 26, 36, 0.2); align-items:center;">
                    <td style="padding: 20px;">{{ $product->name }}</td>
                    <td style="padding: 20px;">{{ $product->description }}</td>
                    <td style="padding: 20px;">{{ $product->price }}</td>
                    <td style="padding: 20px;">{{ $product->category->name }}</td>
                    <td style="padding: 20px;">{{ $product->status }}</td>
                    <td><a class="btn btn-warning"
                            href="{{ url('supplier/editproduct', $product->id) }}">Update</a>
                    </td>
                    <td><a href="{{ url('supplier/destroyproduct', $product->id) }}"
                            class="btn btn-danger">Delete</a>

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>

</x-app-layout>
