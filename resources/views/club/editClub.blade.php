<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../formaClub.css">
    <title>EDIT CLUB</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div clas="col-3"></div>
            <div class="col-6">
                <div class="container">
                    <br><br>
                    <a href="/clubs"><button type="button" class="btn btn-lg btn-block myButton">Back</button></a>

                    <form id="contact" action="{{route('updateclub', $club->id)}}" method="POST"
                        enctype="multipart/form-data">
                        {{csrf_field()}}
                        <h3>Update Club</h3>
                        <fieldset>
                            Name:<br><input placeholder="Name" type="text" name="name" value="{{$club->name}}"
                                tabindex="1" autofocus>
                        </fieldset>
                        <fieldset>
                            Address:<br><input placeholder="Address" type="text" name="address"
                                value="{{$club->address}}" tabindex="2">
                        </fieldset>
                        <fieldset>
                            Email:<br><input placeholder="Email" type="email" name="email" value="{{$club->email}}"
                                tabindex="2">
                        </fieldset>
                        <fieldset>
                            Website:<br><input placeholder="Website (optional)" type="url" name="website"
                                value="{{$club->website}}" tabindex="3">
                        </fieldset>
                        
                        <fieldset>
                            <button name="submit" type="submit" id="contact-submit"
                                data-submit="...Sending">Update</button>
                        </fieldset>
                        <p class="copyright">Designed by Sharks</p>
                    </form>
                </div>
            </div>
            <div clas="col-3">
            </div>
        </div>

    </div>
</body>

</html>