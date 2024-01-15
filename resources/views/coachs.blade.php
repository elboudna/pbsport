@extends('layouts.app')

@section('content')

<div class="bande">
    <h2>Coachs</h2>
</div>
<section id="section-coachs">


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
                    <div class="fleche-coach">
                        <img src="{{ asset('icone/arrow.png') }}" alt="fleche">
                    </div>
                    <a class="mailCoach" href="{{ $coach->email }}"></a>
                    <a class="fbCoach" href="{{ $coach->facebook }}"></a>
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
            <div class="modal-description">
                <p></p>
            </div>
            <div class="contact-coach">
                <a href=""><img src="{{ asset('icone/mail.png') }}" alt="mail"></a>
                <a href=""><img src="{{ asset('icone/fb.png') }}" alt="fb"></a>
            </div>
        </div>
    </div>

</section>
@endsection

<script>
    window.onload = function() {
        // let flex_coach_width = document.querySelector('.photo-coach').offsetWidth;
        // let height = flex_coach_width;

        // let coachInfo = document.querySelectorAll('.info-coach');
        // let coachPhoto = document.querySelectorAll('.photo-coach');

        // coachInfo.forEach(element => {
        //     element.style.height = height + 'px';
        // });

        // coachPhoto.forEach(element => {
        //     element.style.height = height + 'px';
        // });

        let description = document.querySelectorAll('.description-coach p');
        let descriptionCourte = document.querySelectorAll('.description-coach p');
        let fullDescriptions = []; // Array to store full descriptions
        let mailCoach = document.querySelectorAll('.mailCoach');
        let fbCoach = document.querySelectorAll('.fbCoach');
        let imgCoach = document.querySelectorAll('.photo-coach img');
        let nomCoach = document.querySelectorAll('.info-coach h3');
        let nomCacheCoach = document.querySelectorAll('.nom-cache');
        
        // Get the modal container
        let fleche = document.querySelectorAll('.fleche-coach');
        let modal = document.getElementById('myModal');
        let close = document.querySelector('.close-btn');

        
        //modal elements
        let modalDescription = document.querySelector('.modal-container p');
        let mailCoachModal = document.querySelector('.modal-container .contact-coach a:first-child');
        let fbCoachModal = document.querySelector('.modal-container .contact-coach a:last-child');
        let imgModal = document.querySelector('.modal-container img');
        let nomCoachModal = document.querySelector('.modal-container h2');

        for (let i = 0; i < description.length; i++) {
            fullDescriptions.push(description[i].textContent);

            // Trim and split to show only the first 14 words
            let descriptionText = description[i].textContent;
            let descriptionTextTrim = descriptionText.trim();
            let descriptionTextSplit = descriptionTextTrim.split(' ');
            let descriptionTextSlice = descriptionTextSplit.slice(0, 14);
            let descriptionTextJoin = descriptionTextSlice.join(' ');
            descriptionCourte[i].textContent = descriptionTextJoin + '...';
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
            //allow scrolling
            document.body.style.overflow = 'auto';
        });

        let coachElements = document.querySelectorAll('.coach:nth-child(4n+2) .fleche-coach img, .coach:nth-child(4n+3) .fleche-coach img');

        coachElements.forEach(function (img) {
            img.src = "{{ asset('icone/arrow-white.png') }}";
        });
    }
</script>