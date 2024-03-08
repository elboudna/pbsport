#section-coachs {
    margin-top: 100px;
    margin-bottom: 100px;
    margin-left: 150px;
    margin-right: 150px;
    font-family: "Montserrat";
}

#section-coachs h1 {
    color: #e4a81e;
    font-size: 3em;
    font-weight: 700;
    text-align: center;

}

#coachs-flex {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    gap: 5%;
}

.coach {
    display: flex;
    width: 45%;
    margin-bottom: 50px;
}

.photo-coach {
    width: 50%;
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
}

.photo-coach img {
    width: 100%;
    object-fit: cover;
    /* or use 'contain' if you want the whole image to be visible */
    display: block;
    /* black and white */
    filter: grayscale(100%);
}

.coach:nth-child(4n+3) .info-coach,
.coach:nth-child(4n+4) .info-coach {
    justify-content: flex-end;
}

.info-coach {
    width: 50%;
    margin: 0;
    display: flex;
    align-items: flex-end;
}


.info-coach>div {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: #10a87d;
    padding: 10px 10px;
    width: 70%;
    height: 60%;

}

.coach p {
    margin-top: 0;
    margin-bottom: 0;
}

.coach:nth-child(4n+3),
.coach:nth-child(4n+4) {
    flex-direction: row-reverse;
}

.coach:nth-child(4n+2) .info-coach>div,
.coach:nth-child(4n+3) .info-coach>div {
    background-color: #464646;
    color: white;
}

.coach:nth-child(4n+2) h3,
.coach:nth-child(4n+3) h3 {
    color: white;
}

.nom-coach-pro {
    display: flex;
    justify-content: center;
    padding-left: 35%;
    padding-right: 25%;
}

.nom-coach {
    display: flex;
    justify-content: center;
}

.nom-coach-pro h3,
.nom-coach h3 {
    font-size: 22px;
    color: #17191c;
    font-weight: bold;
    margin-top: 10px;
    margin-bottom: 10px;
}

.nom-coach-pro span {
    font-size: 15px;
    font-weight: bold;
    color: transparent;
    background: linear-gradient(45deg, #fff1a3, #ffb10a, #fff1a3, #ffb10a, #fff1a3, #ffb10a);
    background-size: 400% 400%;
    -webkit-background-clip: text;
    animation: gradientAnimation 10s infinite linear;
    /* shadow to see it better */
    text-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
}

.description-coach {
    display: flex;
    height: 105px;
    justify-content: center;
    padding: 0px 12px;
    font-size: 13px;
}

.fleche-coach {
    display: flex;
    justify-content: flex-start;
    margin-top: 5px;
    margin-left: 12px;
}

.fleche-coach img {
    width: 35px;
    height: 35px;
    cursor: pointer;
}

.contact-coach {
    display: flex;
    justify-content: center;
    margin-bottom: 100px;
    height: 40px;
    gap: 20px;
}

.contact-coach a {
    display: flex;
    justify-content: center;
    align-items: center;
}

.contact-coach img {
    width: 30px;
}

.contact-coach a:first-child {
    background-color: #0f9b73;
    width: 50%;
    height: 50px;
}

.contact-coach a:last-child {
    background-color: #1a76d2;
    height: 50px;
    width: 50%;
}

.nom-cache {
    display: none;
}

@keyframes gradientAnimation {
    0% {
        background-position: 0% 0%;
    }

    100% {
        background-position: 100% 100%;
    }
}


.modal-container {
    display: none;
    flex-direction: column;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 20px;
    color: #fff;
    z-index: 1000;
    width: 50%;
    height: 60vh;
}

.modal-img {
    width: 35%;
    display: flex;
    justify-content: center;
    background-color: #464646;
    position: relative;
    left: 5%;
    top: 30%;
}

.modal-img img {
    padding: 40px 0px;
    width: 175px;
    height: 240px;
    object-fit: cover;
    filter: grayscale(100%);

}

.modal-nom {
    display: flex;
    align-items: flex-end;
    width: 60%;
}

.modal-nom h2 {
    font-size: 30px;
    font-weight: bold;
    text-transform: uppercase;
    z-index: 2;
    /* Ensure the text is above the overlay */

}

/* Styling for the close button */
.close-btn {
    position: absolute;
    top: 20px;
    right: 40px;
    cursor: pointer;
    font-size: 50px;
    z-index: 2;
    /* Ensure the text is above the overlay */
}

.modal-top {
    padding-left: 120px;
    padding-right: 120px;
    background: linear-gradient(-45deg, #14C996ff, #11AF83ff, #0C7B5Cff, #074735ff);
    background-size: 400% 400%;
    animation: gradient 5s ease infinite;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 35%;
    color: white;
    display: flex;
    border-radius: 30px 30px 0px 0px;
}



.modal-bottom {
    padding-left: 120px;
    padding-right: 120px;
    height: 65%;
    background: #464646;
    color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    border-radius: 0px 0px 30px 30px;
}

.modal-description {
    display: flex;
    /* justify-content: center; */
    align-items: flex-start;
    width: 55%;
    margin-top: 15px;
}

@keyframes gradient {
    0% {
        background-position: 0% 50%;
    }

    50% {
        background-position: 100% 50%;
    }

    100% {
        background-position: 0% 50%;
    }
}

@media (max-width: 1440px) {
    #section-coachs {
        margin: 100px 100px 50px 100px;
    }
}

@media (max-width: 1160px) {
    #section-coachs {
        margin: 100px 100px 50px 100px;
    }

    .coach {
        /* width: 100%; */
    }

    .photo-coach {
        width: 100%;
    }

    .info-coach {
        width: 100%;
    }

    .info-coach>div {
        width: 100%;
        height: 70%;
    }

    .nom-coach-pro {
        padding-left: 0px;
        padding-right: 0px;
    }

    .nom-coach {
        padding-left: 0px;
        padding-right: 0px;
        margin-top: 0;
    }

    .nom-coach-pro h3,
    .nom-coach h3 {
        font-size: 18px;
    }

    .nom-coach-pro span {
        font-size: 14px;
    }

    .description-coach {
        font-size: 12px;
        height: 80px;
    }

}

@media (max-width: 930px) {
    #section-coachs {
        margin: 100px 70px 50px 70px;
    }

    .fleche-coach img {
        width: 30px;
        height: 30px;
    }
}

@media (max-width: 768px) {

    .fleche-coach img {
        width: 40px;
        height: 40px;
    }

    #section-coachs {
        margin: 100px 50px 50px 50px;
    }

    .coach {
        width: 100%;
    }

    .photo-coach {
        width: 100%;
    }

    .info-coach {
        width: 100%;
    }

    .info-coach>div {
        width: 100%;
        height: 70%;
    }

    .nom-coach-pro {
        padding-left: 0px;
        padding-right: 0px;
    }

    .nom-coach {
        padding-left: 0px;
        padding-right: 0px;
        margin-top: 0;
    }

    .nom-coach-pro h3,
    .nom-coach h3 {
        font-size: 24px;
    }

    .nom-coach-pro span {
        font-size: 14px;
    }

    .description-coach {
        font-size: 16px;
        height: 200px;
    }

    .contact-coach {
        margin-bottom: 50px;
    }

    .coach:nth-child(4n+3),
    .coach:nth-child(4n+4) {
        flex-direction: row;
    }

    .coach:nth-child(even) {
        flex-direction: row-reverse;

    }

    .coach:nth-child(even) .info-coach>div {
        background-color: #464646;
        color: white;
    }


    .coach:nth-child(odd) .info-coach>div {
        background-color: #10a87d;
        color: black;
    }

    .coach:nth-child(odd) h3 {
        color: black;
    }

    .coach:nth-child(even) h3 {
        color: white;
    }

}

@media (max-width: 600px) {
    .photo-coach img {
        height: 100%;
    }

    .nom-coach-pro h3,
    .nom-coach h3 {
        font-size: 20px;
    }

    .description-coach {
        font-size: 14px;
    }

    #section-coachs {
        margin: 50px 20px 50px 20px;
    }
}

@media (max-width: 440px) {

    #section-coachs {
        margin: 50px 0px;
    }

    .coach,
    .coach:nth-child(even),
    .coach:nth-child(4n+3) {
        width: 100%;
        flex-direction: column;
        margin-bottom: 0;
    }

    .info-coach {
        width: 100%;
    }

    .info-coach>div {
        height: 100%;
    }

    .photo-coach {
        width: 100%;
    }

    .info-coach {
        width: 100%;
    }

    .nom-coach-pro,
    .nom-coach {
        padding-left: 0px;
        padding-right: 0px;
        margin-top: 30px;
    }

    .nom-coach-pro span {
        font-size: 14px;
    }

    .contact-coach {
        margin-bottom: 50px;
    }

    .fleche-coach {
        display: none;
    }

}

<div id="coachs-flex">
        @foreach($coachs as $coach)
        <div class="coach">
            <div class="photo-coach">
                <img src="{{ asset('storage/coach_images/' . $coach->photo) }}" alt="{{ $coach->prenom }}">
            </div>
            <div class="info-coach">
                <div>
                    @if($coach->niveau == 'Oui')
                    <div class="nom-coach-pro">
                        <h3>{{ $coach->prenom }}</h3>
                        <span>Pro</span>
                    </div>
                    @else
                    <div class="nom-coach">
                        <h3>{{ $coach->prenom }}</h3>
                    </div>
                    @endif
                    <div class="nom-cache">{{ $coach->nom}}</div>
                    <div class="description-coach">
                        <p>{{ $coach->description }}</p>
                    </div>
                    <a class="mailCoach" href="{{ $coach->email }}"></a>
                    <a class="fbCoach" href="{{ $coach->facebook }}"></a>
                    <div class="fleche-coach">
                        <img src="{{ asset('icone/arrow.png') }}" alt="fleche">
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    <div class="modal-container" id="myModal">
        <span class="close-btn">&times;</span>
        <div class="modal-top">
            <div class="modal-nom">
                <h2></h2>
            </div>
            <div class="modal-img">
                <img src="" alt="">
            </div>
        </div>
        <div class="modal-bottom">
            <!-- <div>
                Coach
            </div> -->
            <div class="modal-description">
                <p></p>
            </div>
            <div class="contact-coach">
                <a href=""><img src="{{ asset('icone/mail.png') }}" alt="mail"></a>
                <a href=""><img src="{{ asset('icone/fb.png') }}" alt="fb"></a>
            </div>
        </div>
    </div>

    <script>
    window.onload = function() {

        let description = document.querySelectorAll('.description-coach p');
        let descriptionCourte = document.querySelectorAll('.description-coach p');
        let fullDescriptions = []; // Array to store full descriptions
        let mailCoach = document.querySelectorAll('.mailCoach');
        let fbCoach = document.querySelectorAll('.fbCoach');
        let imgCoach = document.querySelectorAll('.photo-coach img');
        let nomCoach = document.querySelectorAll('.info-coach h3');
        let nomCacheCoach = document.querySelectorAll('.nom-cache');

        // Get the modal container
        let fleche = document.querySelectorAll('.fleche-coach img');
        let modal = document.getElementById('myModal');
        let close = document.querySelector('.close-btn');


        //modal elements
        let modalDescription = document.querySelector('.modal-container p');
        let mailCoachModal = document.querySelector('.modal-container .contact-coach a:first-child');
        let fbCoachModal = document.querySelector('.modal-container .contact-coach a:last-child');
        let imgModal = document.querySelector('.modal-container img');
        let nomCoachModal = document.querySelector('.modal-container h2');

        if (window.matchMedia("(min-width: 1025px)").matches) {
            for (let i = 0; i < description.length; i++) {
                fullDescriptions.push(description[i].textContent);

                // Trim and split to show only the first 10 words
                let descriptionText = description[i].textContent;
                let descriptionTextTrim = descriptionText.trim();
                let descriptionTextSplit = descriptionTextTrim.split(' ');
                let descriptionTextSlice = descriptionTextSplit.slice(0, 10);
                let descriptionTextJoin = descriptionTextSlice.join(' ');
                descriptionCourte[i].textContent = descriptionTextJoin + '..';
            }
        }

        // for screen between 1024px and 900px show only 10 words   
        if (window.matchMedia("(max-width: 1024px)").matches && window.matchMedia("(min-width: 931px)").matches) {
            for (let i = 0; i < description.length; i++) {
                fullDescriptions.push(description[i].textContent);

                // Trim and split to show only the first 10 words
                let descriptionText = description[i].textContent;
                let descriptionTextTrim = descriptionText.trim();
                let descriptionTextSplit = descriptionTextTrim.split(' ');
                let descriptionTextSlice = descriptionTextSplit.slice(0, 10);
                let descriptionTextJoin = descriptionTextSlice.join(' ');
                descriptionCourte[i].textContent = descriptionTextJoin + '..';
            }
        }

        // for screen between 930 and 770px show only 5 words
        if (window.matchMedia("(max-width: 930px)").matches && window.matchMedia("(min-width: 770px)").matches) {
            for (let i = 0; i < description.length; i++) {
                fullDescriptions.push(description[i].textContent);

                // Trim and split to show only the first 5 words
                let descriptionText = description[i].textContent;
                let descriptionTextTrim = descriptionText.trim();
                let descriptionTextSplit = descriptionTextTrim.split(' ');
                let descriptionTextSlice = descriptionTextSplit.slice(0, 5);
                let descriptionTextJoin = descriptionTextSlice.join(' ');
                descriptionCourte[i].textContent = descriptionTextJoin + '..';
            }
        }


        // for screen 768px and less show only 10 words
        if (window.matchMedia("(max-width: 768px)").matches && window.matchMedia("(min-width: 441px)").matches) {
            for (let i = 0; i < description.length; i++) {
                fullDescriptions.push(description[i].textContent);

                // Trim and split to show only the first 10 words
                let descriptionText = description[i].textContent;
                let descriptionTextTrim = descriptionText.trim();
                let descriptionTextSplit = descriptionTextTrim.split(' ');
                let descriptionTextSlice = descriptionTextSplit.slice(0, 25);
                let descriptionTextJoin = descriptionTextSlice.join(' ');
                descriptionCourte[i].textContent = descriptionTextJoin + '..';
            }
        }


        // for screen 440px and less show 30 words
        if (window.matchMedia("(max-width: 440px)").matches) {
            for (let i = 0; i < description.length; i++) {
                fullDescriptions.push(description[i].textContent);

                // Trim and split to show only the first 30 words
                let descriptionText = description[i].textContent;
                let descriptionTextTrim = descriptionText.trim();
                let descriptionTextSplit = descriptionTextTrim.split(' ');
                let descriptionTextSlice = descriptionTextSplit.slice(0, 30);
                let descriptionTextJoin = descriptionTextSlice.join(' ');
                descriptionCourte[i].textContent = descriptionTextJoin + '.';
            }
        }

        for (let i = 0; i < fleche.length; i++) {
            fleche[i].addEventListener('click', function() {
                modal.style.display = 'flex';

                //disallow scrolling
                document.body.style.overflow = 'hidden';

                modalDescription.textContent = fullDescriptions[i];
                mailCoachModal.href = 'mailto:' + mailCoach[i].href;
                fbCoachModal.href = fbCoach[i].href;
                imgModal.src = imgCoach[i].src;
                imgModal.alt = imgCoach[i].alt;
                nomCoachModal.textContent = nomCoach[i].textContent + ' ' + nomCacheCoach[i].textContent;
            });
        }

        close.addEventListener('click', function() {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        });

        let coachElements = document.querySelectorAll('.coach:nth-child(4n+2) .fleche-coach img, .coach:nth-child(4n+3) .fleche-coach img');

        coachElements.forEach(function(img) {
            img.src = "{{ asset('icone/arrow-white.png') }}";
        });

        // for screen 768px and less, even coachs img are white arrow 

        if (window.matchMedia("(max-width: 768px)").matches) {
            let coachElementsEven = document.querySelectorAll('.coach:nth-child(even) .fleche-coach img');
            let coachElementsOdd = document.querySelectorAll('.coach:nth-child(odd) .fleche-coach img');

            coachElementsEven.forEach(function(img) {
                img.src = "{{ asset('icone/arrow-white.png') }}";
            });

            coachElementsOdd.forEach(function(img) {
                img.src = "{{ asset('icone/arrow.png') }}";
            });

        }

    }
</script>