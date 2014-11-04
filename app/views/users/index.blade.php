<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>User type</th>
            <th>Phone</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                </a>
                <td>
                    <a href="edit/{{ $user->id }}">{{ $user->name }}</a></td>
                <td>{{ $user->user_type }}</td>
                <td>{{ $user->mobile_number1 }}</td>
                @if ($user->is_active == 1)
                    <td>Active</td>
                @else
                    <td>Inactive</td>
                @endif

            </tr>
        @endforeach
        </tbody>
    </table>
</div>