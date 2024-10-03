<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>GROUP 9</title>  
    <link rel="stylesheet" href="style.css">  
</head>  
<body>  

<?php include 'header.php'; ?>  


<div class="container" id="members">  
    <h1>Meet Our Members</h1>  

    <div class="main-member">  
        <img src="Ayen.jpg" alt="Leader" class="member-image">  
        <h2>LEADER</h2>  
        <h3><span class="highlight">Airielle</span> Marie Navea</h3>  
        <p>Age: 21</p>  
        <p>Address: Soldiers Hills Village, Putatan, Muntinlupa City</p>  
        <h4 class="quote">"Run at your own pace, the world will wait for you."</h4>  
    </div>  

    <div class="team-grid">  
        <div class="member-card">  
            <img src="Jenaly.jpg" alt="Member" class="member-image">  
            <h3><span class="highlight">Jenelyn</span> Bulan</h3>  
            <p>Age: 28</p>  
            <p>Address: Sitio Tuklas, Cupang</p>  
            <h4 class="quote">"Try and try until you succeed."</h4>  
        </div>  
        <div class="member-card">  
            <img src="Hana.jpg" alt="Member" class="member-image">  
            <h3><span class="highlight">Farhana</span> Muhaimen</h3>  
            <p>Age: 22</p>  
            <p>Address: Purok 6, Alabang City</p>  
            <h4 class="quote">"If opportunity doesn't knock, build a door."</h4>  
        </div>  
        <div class="member-card">  
            <img src="Ep.jpg" alt="Member" class="member-image">  
            <h3><span class="highlight">Ephraim</span> Lagdamat</h3>  
            <p>Age: 24</p>  
            <p>Address: Soldiers Compound Hills, Putatan, Muntinlupa</p>  
            <h4 class="quote">"Hard work betrays none, but dreams betray many."</h4>  
        </div>  
        <div class="member-card">  
            <img src="images/Member.jpg" alt="Member" class="member-image">  
            <h3>Ernesto Capulong</h3>  
            <p>Age: XX</p>  
            <p>Address: XX</p>  
            <h4 class="quote">"XXX."</h4>  
        </div>  
    </div>   
</div>  

<?php include 'footer.php'; ?>  

<script src="script.js"></script>  

<script>
    const links = document.querySelectorAll('.nav-list a');

    links.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault(); 
            const targetId = this.getAttribute('href'); 
            const targetSection = document.querySelector(targetId); 

            if (targetSection) {
                targetSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
</script>

</body>  
</html>
