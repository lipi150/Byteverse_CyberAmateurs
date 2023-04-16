<!DOCTYPE html>
<html>
  <head>
    <title>Ticketing Portal</title>
    <link rel="stylesheet" type="text/css" href="createnewticket.css">
    <!-- <script src="script.js" defer></script> -->
  </head>
  <body id="new-ticket">
    <header>
      <h1>Ticketing Portal</h1>
      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">New Ticket</a></li>
          <li><a href="#">View Tickets</a></li>
          <li><a href="#">Logout</a></li>
        </ul>
      </nav>
    </header>
    <main >
      <section >
        <?php
          if isset(($_POST['submit'])){
            $title=$_POST['title'];
            $description=$_POST['description'];
          }
        ?>
        <h2>Create New Ticket</h2>
        <form action="viewticket">
          <label for="title">Title:</label>
          <input type="text" id="title" name="title">
          <label for="description">Description:</label>
          <textarea id="description" name="description"></textarea>
          <button type="submit" id="open">Create</button>
          
        </form>
      </section>
      <section id="tickets">
        <h2>My Tickets</h2>
        <ul>
          <li>
            <h3>Ticket Title</h3>
            <p>Ticket Description</p>
            <span class="status">Open</span>
          </li>
         
        </ul>
      </section>
    </main>
    <footer>
      <p>&copy; 2023 Ticketing Portal</p>
    </footer>


    <!-- <script>
     const open = document.getElementById("open");
     const title = document.getElementById("title");
     const description = document.getElementById("description");
     
     open.addEventListener("submit",(e)=>{
    e.preventDefault();
   const titleValue = title.value;
   const descriptionValue = description.value;

   localStorage.setItem('title', titleValue);
   localStorage.setItem('description',descriptionValue);
   console.log("clicked");
   window.open("viewticket.php");
});

    </script> -->

  </body>
</html>





