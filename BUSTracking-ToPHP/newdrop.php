<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--  -->
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="script.js" defer></script>
  </head>
  <style>
    /* Import Google font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: #595DB8;
}
.sortable-list {
  width: 425px;
  padding: 25px;
  background: #fff;
  border-radius: 7px;
  padding: 30px 25px 20px;
  box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}
.sortable-list .item {
  list-style: none;
  display: flex;
  /* cursor: move; */
  background: #fff;
  align-items: center;
  border-radius: 5px;
  padding: 10px 13px;
  margin-bottom: 11px;
  /* box-shadow: 0 2px 4px rgba(0,0,0,0.06); */
  border: 1px solid #ccc;
  justify-content: space-between;
}
.item .details {
  display: flex;
  align-items: center;
}
.item .details img {
  height: 43px;
  width: 43px;
  pointer-events: none;
  margin-right: 12px;
  object-fit: cover;
  border-radius: 50%;
}
.item .details span {
  font-size: 1.13rem;
}
.item i {
  color: #474747;
  font-size: 1.13rem;
}
/* .item.dragging {
  opacity: 0.6; */
/* } */
/* .item.dragging :where(.details, i) {
  opacity: 0; */
/* } */
  </style>
  
  <body>
    <ul class="sortable-list">
      <li class="item" >
        <div class="details">
          <!-- <img src="images/img-1.jpg"> -->
          <span onclick="shimtojam()">Shimla To jammu-katra</span>
        </div>
        <i class="fa fa-bus" aria-hidden="true"></i>
      </li>
      <li class="item" draggable="">
        <div class="details">
          <!-- <img src="images/img-2.jpg"> -->
          <span onclick="shimtohari()">Shimla To Haridwar</span>
        </div>
        <i class="fa fa-bus" aria-hidden="true"></i>
      </li>
      <li class="item" draggable="">
        <div class="details">
          <!-- <img src="images/img-3.jpg"> -->
          <span onclick="mantodel()">Manali To Delhi</span>
        </div>
        <i class="fa fa-bus" aria-hidden="true"></i>
      </li>
      <li class="item" draggable="">
        <div class="details">
          <!-- <img src="images/img-4.jpg"> -->
          <span onclick="chantoman()">Chandigarh To Manali</span>
        </div>
        <i class="fa fa-bus" aria-hidden=""></i>
      </li>
      <li class="item" draggable="">
        <div class="details">
          <!-- <img src="images/img-5.jpg"> -->
          <span onclick="shimtodel()">Shimla To Delhi</span>
        </div>
        <i class="fa fa-bus" aria-hidden="true"></i>
      </li>
      <li class="item" draggable="">
        <div class="details" >
          <!-- <img src="images/img-6.jpg"> -->
          <span onclick="dharmtochan()">Dharamshala To Chandigarh</span>
        </div>
        <i class="fa fa-bus" aria-hidden="true"></i>
      </li>
    </ul>

<!-- <script lang="javascript">
    const sortableList = document.querySelector(".sortable-list");
const items = sortableList.querySelectorAll(".item");

items.forEach(item => {
    item.addEventListener("dragstart", () => {
        // Adding dragging class to item after a delay
        setTimeout(() => item.classList.add("dragging"), 0);
    });
    // Removing dragging class from item on dragend event
    item.addEventListener("dragend", () => item.classList.remove("dragging"));
});

const initSortableList = (e) => {
    e.preventDefault();
    const draggingItem = document.querySelector(".dragging");
    // Getting all items except currently dragging and making array of them
    let siblings = [...sortableList.querySelectorAll(".item:not(.dragging)")];

    // Finding the sibling after which the dragging item should be placed
    let nextSibling = siblings.find(sibling => {
        return e.clientY <= sibling.offsetTop + sibling.offsetHeight / 2;
    });

    // Inserting the dragging item before the found sibling
    sortableList.insertBefore(draggingItem, nextSibling);
}

sortableList.addEventListener("dragover", initSortableList);
sortableList.addEventListener("dragenter", e => e.preventDefault());
</script> -->
<script lang="javascript">
    function shimtojam(){
        window.open('shimtojam.php')
    }
    function shimtohari(){
        window.open('shimtohari.php')
    }
    function mantodel(){
        window.open('mantodel.php')
    }
    function chantoman(){
        window.open('chantoman.php')
    }
    function shimtodel(){
        window.open('shimtodel.php')
    }
    function dharmtochan(){
        window.open('dharmtochan.php')
    }

</script>

  </body>
</html>
