<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>add a project</title>
    <style media="screen">
      body{
        background-color: black;
        color:white ;
      }
    </style>
  </head>
  <body>
    <h1>Create a new project!</h1>
    <form class="" action="index.php?ctl=project" method="post">
      <label for="">Id de l'association suisse: <input type="text" name="association" value="" placeholder="which association suisse?"></label>
      <br>
      <label for="">Title: <input type="text" name="title" value="" placeholder="add a title to your project"></label>
      <br>
      <label for="">Status: <input type="text" name="status" value="" placeholder="draft,completed,..."></label>
      <br>
      <label for="">Budget: <input type="text" name="budget" value="" placeholder="specify your budget"></label>
      <br>
      <label for="">Document: <input type="text" name="document" value="" placeholder="add a document"></label>
      <br>
      <label for="">Description: <input type="text" name="description" value="" placeholder="add a description"></label>
      <br>
      <label for="">deadline: <input type="text" name="deadline" value="" placeholder="add a deadline"></label>
      <br>
      <input type="submit" name="button" value="submit!">
    </form>
  </body>
</html>
