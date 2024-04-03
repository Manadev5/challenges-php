<form  action="thanks.php" method="post">
    <div>
      <label for="name">Nom :</label>
      <input type="text"  id="name"  name="user_name">
    </div>
    <div>
        <label for="number"> Telephone : </label>
        <input type="number" id="number" name ="phone_number">
    </div>
    <div>
      <label  for="email">Courriel :</label>
        <input  type="email"  id="email"  name="user_email">
    </div>
    <div>
        <label for="subject"> Sujet : </label>
        <select id="subject" name="user_subject">
            <option>Rendez-vous</option>
            <option>propositionde projet</option>
            <option>offre d'emploi</option>
            <option>Collaboration</option>
        </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>



