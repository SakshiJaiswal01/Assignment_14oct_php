<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>changepass</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container {
            width: 250%;
            margin-top: 1px;
        }

        #contain {
            margin-right: 80px;
        }
    </style>
</head>

<body>
    <section class="">
        <div class="row" id="contain">
            <div class="col-lg-5 m-auto">
                <div class="card bg-dark container">

                    <div class="card-body">
                        <form method="post" enctype="multipart/form-data">
                            <div class="input-group-mb-3">
                                <div class="form-group">
                                    <input type="text" name="ename" class="form-control" placeholder="employee Name">
                                </div>
                            </div>
                            <div class="input-group-mb-3">
                                <div class="form-group text-white">
                                    <label>Are you a current or former employee?</label>
                                    <input type="radio" name="emp" value="current"><label>current </label>
                                    <input type="radio" name="emp" value="formal"><label>Formal </label>
                                </div>
                            </div>
                            <div class="input-group-mb-3">
                                <div class="form-group text-white">
                                    <label>Employment Status</label>
                                    <select name="status" id="status">
                                        <option value="full">Full Time</option>
                                        <option value="part">Part Time</option>
                                        <option value="contract">Contract</option>
                                        <option value="intern">Intern</option>
                                    </select>
                                </div>
                            </div>
                            <table>
                                <div class="form-group">
                                    <tr>
                                        <td><label class="text-white">Pros</label></td>
                                        <td><textarea name="pros" rows="2" cols="20"></textarea></td>
                                    </tr>
                                </div>
                                <div class="form-group">
                                    <tr>
                                        <td><label class="text-white">Cons</label></td>
                                        <td><textarea name="cons" rows="2" cols="20"></textarea></td>
                                    </tr>
                                </div>
                                <div class="form-group">
                                    <tr>
                                        <td><label class="text-white">Advice Management</label></td>
                                        <td><textarea name="advice" rows="2" cols="20"></textarea></td>
                                    </tr>
                                </div>
                            </table>
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" placeholder="Job Title">
                            </div>
                            <div class="form-group text-white">
                                <label>Submit Proof</label>
                                <input type="file" class="form-control" name="att">
                            </div>
                            <div class="form-group text-white">
                                <input type="checkbox" id="t&c" name="tc" value="tc">
                                <label>Agree Terms and Condition</label>
                            </div>
                            <button type="submit" value="feedback" name="feedback" class="btn btn-success">SUBMIT FEEDBACK</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>