<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Air Ticket Builder</title>
</head>
<body>
<div class="container">
        <h1>Air Tickets</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="skrydis">Skrydzio Nr</label>
                <input type="text" class="form-control" id="skrydis" aria-describedby="skrydis" name="skrydis">
            </div>
            <div class="form-group">
                <label for="kodas">Asmens Kodas</label>
                <input type="text" class="form-control" id="kodas" aria-describedby="kodas" name="kodas">
            </div>
            <div class="form-group">
                <label for="vardas">Vardas</label>
                <input type="text" class="form-control" id="vardas" aria-describedby="vardas" name="vardas">
            </div>
            <div class="form-group">
                <label for="pavarde">Pavarde</label>
                <input type="text" class="form-control" id="pavarde" aria-describedby="pavarde" name="pavarde">
            </div>
            <div class="form-group">
                <label for="is">Is Kur Skrenda</label>
                <input type="text" class="form-control" id="is" aria-describedby="is" name="is">
            </div>
            <div class="form-group">
                <label for="i">I Kur Skrenda</label>
                <input type="text" class="form-control" id="i" aria-describedby="i" name="i">
            </div>
            <div class="form-group">
                <label for="kaina">Kaina</label>
                <input type="text" class="form-control" id="kaina" aria-describedby="kaina" name="kaina">
            </div>
            <div class="form-group">
                <label for="svoris">Svoris</label>
                <input type="text" class="form-control" id="svoris" aria-describedby="svoris" name="svoris">
            </div>
            <div class="form-group">
                <label for="pastabos">Pastabos</label>
                <input type="text" class="form-control" id="pastabos" aria-describedby="pastabos" name="pastabos">
            </div>
                <select class="form-control" name="user" id="user" name="user">
                    <?php foreach($users as $user):?>
                    <option value="<?=$user;?>"><?=$user?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" name="confirm">Spausdinti</button>
        </form>
    </div>
</body>
</html>