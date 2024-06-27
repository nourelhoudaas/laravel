<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Ajouter Employer</title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>  
<div class="btn-back" style="display: flex; align-items: center;" id="btn-ch">
    <svg xmlns="http://www.w3.org/2000/svg" width="50px" height="40px" viewBox="1 0 1024 1024" class="icon"><path fill="#000000" d="M224 480h640a32 32 0 110 64H224a32 32 0 010-64z"/><path fill="#000000" d="M237.248 512l265.408 265.344a32 32 0 01-45.312 45.312l-288-288a32 32 0 010-45.312l288-288a32 32 0 1145.312 45.312L237.248 512z"/></svg>
    <p style='font-family: "Lucida Console", "Courier New", monospace; font-size: 25px; padding-top:5px'>back</p>
</div>
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-2">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold">ADMIN</span>
                <span class="text-black-50">ADMIN@mail.com.my</span>
                <span> 

                </span>
            </div>
        </div>
        <form action="/Employe/add" method="POST">
            @csrf
        <div class="col-md-5">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
         
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                <div class="col-md-12">
                        <label class="labels">NIN</label>
                        <input type="text" class="form-control" placeholder="enter NIN" value="" id="NIN">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Nom</label>
                        <input type="text" class="form-control" placeholder="Nom" value="" id="name">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Prenom</label>
                        <input type="text" class="form-control" value="" placeholder="Prenom" id="sname">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label class="labels">Nom Arabe</label>
                        <input type="text" class="form-control" placeholder="الإسم" value="" id="nameAR">
                    </div>
                    <div class="col-md-6">
                        <label class="labels">Prenom Arabe</label>
                        <input type="text" class="form-control" value="" placeholder="اللقب" id="snameAR">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label class="labels">Numero Telephone</label>
                        <input type="text" class="form-control" placeholder="enter Numero" value="" id="nbrphone">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Address Line 1</label>
                        <input type="text" class="form-control" placeholder="enter address line 1" value="" id="adr1">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">date Naissance</label>
                        <input type="date" class="form-control" value="" id="brtday">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Lieu</label>
                        <input type="text" class="form-control" placeholder="Lieu De Niassance" value="" id="plc">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Email ID</label>
                        <input type="text" class="form-control" placeholder="enter email" value="" id="mail">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Education</label>
                        <input type="text" class="form-control" placeholder="education" value="" id="niveau">
                    </div>
                    <div class="col-md-12">
                        <label class="labels">Date obtenu </label>
                        <input type="date" class="form-control" value="" id="dateDepl">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                    <label class="labels">Sexe</label>
                       <select name="sexe" id="sexe"class="form-select form-select-lg mb-3" aria-label="Default select example">
                            <option value="">--Please choose an option--</option>
                            <option value="dog">Femme</option>
                            <option value="cat">Homme</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="labels">State/Region</label>
                        <input type="text" class="form-control" value="" placeholder="state">
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <button class="btn btn-primary profile-button" type="submit" id="btn-sv">Save Profile</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
     $(document).ready(function(){
    $('#btn-sv').click(function(e){
        e.preventDefault();

                // Assuming you are searching by ID_NIN
                var formData = {
                    ID_NIN:$('#NIN').val(),
                    Nom_P:$('#name').val(),
                    Prenom_O:$('#sname').val(),
                    nameAR:$('#nameAR').val(),
                    scnAR:$('#snameAR').val(),
                    PHONE_NB : $('#nbrphone').val(),
                    Address :$('#adr1').val(),
                    Date_Nais_P: $('#brtday').val(),
                    Lieu_N:$('#plc').val(),
                    EMAIL:$('#mail').val(),
                    niveau:$('#niveau').val(),
                    dateDepl:$('#dateDepl').val(),
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    _method: 'POST'
                };

                $.ajax({
                    url: '/Employe/add/',
                    type: 'POST',
                    data: formData,
                    success: function (response) {
                        alert('donnee personnel a ajouter')
                        var id=$('#NIN').val();
                      window.location.href="/Employe/IsTravaill/"+id;
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