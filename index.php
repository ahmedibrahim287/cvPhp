<?php
$title = "Home";
include "includes/templates/header.php";
include "includes/templates/navbar.php";
?>

  <header class="page__header">

        <nav class="navbar navbar__menu">
            <!-- Navigation starts as empty UL that will be populated with JS -->
            <a href="#" class="navbar-brand"><img src="images/2.png"></a>
            <ul id="navbar__list">
                <li><a href="#section1">Education</a></li>
                <li><a href="#section2">Skills</a></li>
                <li><a href="#section3">Work Experience</a></li>
                <li><a href="#section4">Memberships</a></li>
                <li><a href="#section5">Courses</a></li>
            </ul>
            <button class="navbar-toggler">
                <span></span>
            </button>
        </nav>

    </header>
 <main>
        <header class="main__hero">
            <h1>Ahmed ibrahim mohamed</h1>

        </header>
        <!-- Each Section has an ID (used for the anchor) and 
    a data attribute that will populate the li node.
    Adding more sections will automatically populate nav.
    The first section is set to active class by default -->
        <section id="section0" data-nav="Section 0" class="your-active-class">
            <div class="landing__container">
                <h2>Personal Information</h2>
                <ul class="lihi">
                    <li>Phone & WhatsApp number: 01099487032</li>
                    <li>Date of Birth: 27/03/1998</li>
                    <li>Marital Status: Single</li>
                    <li>Military Status: Completed</li>
                    <li>Email: ahmedibrahim287@outlook.sa</li>
                    <li>Gender: Male</li>
                </ul>
                <p>


                </p>

                <p class="liP">A fresh graduate. Passionate about Web development, specialized in front end development.
                    Experienced with
                    all stages of the development cycle for dynamic web projects. Well-versed in numerous programming
                    languages
                    including HTML, CSS, JavaScript, jQuery, Angular, and Node JS.</p>
            </div>
        </section>
        <section id="section1" data-nav="Section 1" class="your-active-class">
            <div class="landing__container">
                <h2>Education</h2>
                <p class="liP">Bachelor in Business Information System (BIS) from Helwan University, Faculty of Commerce
                    and
                    Business
                    Administration.
                    <ul>
                        <li class="edLi"> <strong>Grade </strong>: Very Good.</li>
                        <li class="edLi"> <strong>Graduated in</strong>: 2019.</li>
                    </ul>
                </p>

            </div>
        </section>
        <section id="section2" data-nav="Section 2">
            <div class="landing__container">
                <h2>Skills</h2>
                <p>
                    <strong class="liP">Software Skills</strong>
                    <ul class="lihi">
                        <li>Microsoft skills (Word, Excel, PowerPoint)</li>
                        <li>Video Editing (Adobe Premiere Pro)</li>
                        <li>HTML, HTML5, CSS, CSS3, Bootstrap, OOP,JavaScript</li>
                        <li>Solving technical problems</li>
                    </ul>
                </p>

                <p>
                    <strong class="liP">Personal Skills</strong>
                    <ul class="lihi">
                        <li>Flexibility</li>
                        <li>Research and Organizing</li>
                        <li>Leadership</li>
                        <li>Negotiation and Persuasion</li>
                        <li>Time Management</li>
                        <li>Creativity</li>
                        <li>Punctuality</li>
                        <li>Excellent communicating with people</li>
                    </ul>
                </p>
            </div>
        </section>
        <section id="section3" data-nav="Section 3">
            <div class="landing__container">
                <h2>Work Experience</h2>
                <p>
                    <ul class="edLi">
                        <li>Help Desk in (Low Calories) restaurant UAE (December 2020 – June 2021).</li>
                        <li>Trainee in web development at (For You).</li>
                        <li>Coordination & logistics (C&L) at (Color Run) event for 1 month.</li>
                        <li>Sales agent at Aqua technology Egypt for 3 months.</li>
                        <li>Express delivery at (Terpo) for 4 months.</li>
                        <li>Customer Service Officer at (Americana groups) for 1 year.</li>
                    </ul>
                </p>


            </div>
        </section>
        <section id="section4" data-nav="Section 4">
            <div class="landing__container">
                <h2>Memberships & Achievements</h2>
                <p>
                    <ul class="lihi">
                        <li> Participant in NASA's space apps Cairo 2018.</li>
                        <li>Participant in Vodafone innovation hackathon'18 010, one of the top 10 winner teams and the
                            winner team
                            of
                            social media projects competition.</li>
                        <li>Head of Marketing TREE'19.</li>
                        <li> Vice-Head for (Tanweer) project (which cares about homeless children) at SENCRO 2018.</li>
                        <li> Member in SENCRO (Simulation of Egyptian National Child's Rights Observatory) In 2017.</li>
                        <li> Volunteered with UNICEF in an awareness campaign called (اولادنا )</li>
                        <li> Representative of SENCRO in (Samosocial) event.</li>
                        <li> A representative of a seminar in the library of Alexandria and El Sawy Culturewheel about
                            children
                            without
                            shelter.</li>
                        <li>Volunteer in Cairo marathon 2018.</li>
                        <li> Vice head IT (TEDx helwan university ) 2021 .</li>
                    </ul>

                </p>


            </div>
        </section>
        <section id="section5" data-nav="Section 5">
            <div class="landing__container">
                <h2>Courses</h2>
                <p>

                    <ul class="edLI">
                        <li> Mean Stack Developer in (ITshare).</li>
                        <li>Web development courses from Udemy.</li>
                        <li>Android developer from Udacity.</li>
                    </ul>
                </p>
            </div>
        </section>
    </main>


<?php
include "includes/templates/footer.php";
?>