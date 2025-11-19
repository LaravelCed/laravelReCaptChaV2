<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    @if (isset($errorRecaptcha))
        @if ($errorRecaptcha)
            <script>
                Swal.fire({
                    title:'Error Recaptcha',
                    text:'There has been error in recaptcha please try again',
                    icon:'error',
                    timer:1500,
                    showConfirmButton:false,
                    willClose: () => {
                        window.location.href='/';
                    }
                })
            </script>
        @endif
    @endif
    {{-- Main Content --}}
    <br>
    
    <div style="display: flex; justify-content: center;">
        <div class="div">
            <form action="addRecaptcha" method="POST">
                @csrf
                <div class="g-recaptcha" data-sitekey="6LegbhAsAAAAAB44pUc6YcxcIY1h08Jw9Fqeaae3"></div>
                <br/>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>