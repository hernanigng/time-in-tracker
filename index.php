<!DOCTYPE html>
<html>
    <header>
        <title>test</title>
        <style></style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.21.0/mdb.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.21.0/mdb.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </header>

    <body>
    
<div class="container">

    <div class="card col-md-12 mt-4">
        <div class="card-body">
            <h1 class="text-center fw-bold">Time Tracker</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <form autocomplete="off" onsubmit="onFormSubmit()">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5M9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8m1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5m-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96q.04-.245.04-.5M7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0"/>
                            </svg>&nbsp ID</span>
                            <input type="text" name="id" id="id" class="form-control">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>&nbsp Fullname</span>
                            <input type="text" name="fname" id="fname" class="form-control">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-alarm-fill" viewBox="0 0 16 16">
                            <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5m2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.04 8.04 0 0 0 .86 5.387M11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.04 8.04 0 0 0-3.527-3.527"/>
                            </svg>&nbsp Time-In</span>
                            <input type="time" name="timein" id="timein" class="form-control" value="10:05 AM" />  
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-success me-md-2" type="submit">Submit</button>
                            <button class="btn btn-warning" type="reset">Reset</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6 mt-5">  
            <div class="card">
                <div class="card-body">

            <table class="table table-striped" id="storeList">
            <thead>
                <tr>
                <th scope="col">User ID</th>
                <th scope="col">Fullname</th>
                <th scope="col">Time-In</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
            </table>

                </div>
            </div>
        </div>
</div>

<script type="text/javascript" src="script.js"></script>

    </body>
</html>

