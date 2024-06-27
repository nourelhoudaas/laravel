<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Departments and Offices</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <div class="di">
        <label id='ID_N'> {{$employe->ID_NIN}}</label>
        <label id='ID_P'> {{$employe->ID_P}}</label>
    <form action="{{ route('Employe.travaill') }}" method="POST">
        @csrf
        <select name="department">
            <option value="">Select Department</option>
            @foreach($dbdirection as $department)
                <option value="{{ $department->ID_D }}" id="ID_D">{{ $department->NOM_D }}</option>
            @endforeach
        </select>

        <select name="office">
            <option value="">Select Office</option>

                @foreach($dbbureau as $office)
                    <option value="{{ $office->ID_B }}" id="ID_B">{{ $office->NO_B }}</option>
                @endforeach
        
        </select>

        <button type="submit" id="aft">Afficter</button>
        <label for="DatePV">Date PV installation:</label>
        <input type="date" id="DatePV" name="DatePV"><br><br>
    </form>

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const departmentSelect = document.querySelector('select[name="department"]');
            const officeSelect = document.querySelector('select[name="office"]');
            const offices = Array.from(officeSelect.options);
        });
        $(document).ready(function(){
    $('#aft').click(function(e){
        e.preventDefault();

                var id = '{{ $employe->ID_NIN }}';
                var idp = '{{ $employe->ID_P }}'; // Assuming you are searching by ID_NIN
                var formData = {
                    ID_NIN:id,
                    ID_P : idp,
                    ID_D :$('#ID_D').val(),
                    ID_B: $('#ID_B').val(),
                    DatePV:$('#DatePV').val(),
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    _method: 'POST'
                };

                $.ajax({
                    url: '/Employe/Travaill/',
                    type: 'POST',
                    data: formData,
                    success: function (response) {
                      window.location.href="{{ route('Employe.create') }}"
                    },
                    error: function (xhr) {
                        console.log(xhr.responseText);
                    }
                });
    });
});
    </script>
</body>
</html>