<?php 

include 'header.php';

?>

<form  action="add-authors.php" method="post">
    <div>
      <label for="name">Prenom :</label>
      <input type="text"  id="name"  name="name">
    </div>
    <div>
        <label for="surname"> Nom : </label>
        <input type="text" id="surname" name ="surname">
    </div>
    <div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
     
  </form><br>

  <form  action="add-books.php" method="post">
    <div>
      <label for="name">Nom :</label>
      <input type="text"  id="name"  name="name">
    </div>
    <div>
        <label for="date"> Date : </label>
        <input type="text" id="date" name ="date">
    </div>
    <div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
     
  </form>

  <form  action="add-category.php" method="post">
    <div>
      <label for="id">ID :</label>
      <input type="number"  id="id"  name="id">
    </div>
    <div>
      <label for="doc">Documentary :</label>
      <input type="text"  id="doc"  name="doc">
    </div>
    <div>
        <label for="horror">Horror: </label>
        <input type="text" id="horror" name ="horror">
    </div>
    <div>
    <div>
        <label for="roman">roman: </label>
        <input type="text" id="roman" name ="roman">
    </div>
    <div>
        <label for="comedie">comedie: </label>
        <input type="text" id="comedie" name ="comedie">
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
     
  </form>