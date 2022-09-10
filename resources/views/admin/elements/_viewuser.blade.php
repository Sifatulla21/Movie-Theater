<div class="col-md-12 mx-auto">
    @if ( Session::get('fail'))
      <x-alert type="error" message="In edit form, {{ Session::get('fail') }}"/>
    @endif
    @if (Session::get('successed'))
      <x-alert type="success" message="{{ Session::get('successed') }}"/>
    @endif
    {{-- table component --}}
    <x-table 
      :th="['Name', 'email', 'Role', 'phone']" 
    >
      @foreach ($admins as $item)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $item->name }}</td>
          <td>{{ $item->email }}</td>
          <td>{{ $item->role }}</td>
          <td>{{ $item->phone }}</td>
          <td>
            @if (Auth::user()->role == 'admin')
            <x-modal 
              type="editmodal" 
              route="users.update,user=>{{ $item->id }}"
              title="Approval Form" id="{{ $item->id }}" /> ||
              <button class="btn btn-danger" 
                onclick="deleteData('{{ route('users.destroy',['user'=>$item->id]) }}')">
              Delete</button>
              @endif
          </td>
        </tr>   
      @endforeach
    </x-table>
</div>