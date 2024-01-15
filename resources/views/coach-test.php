
<div class="flexMembreEquipe">
        @foreach($coachs as $coach)
        <div class="flip-box">
            <div class="flip-box-inner">
                <div class="membreEquipePhoto">
                    <img class="team-member-image" src="{{ asset('storage/coach_images/' . $coach->photo) }}" alt="{{ $coach->prenom }}">
                </div>
                <div class="membreEquipeNom">
                    <p class="team-member-name">{{ $coach->prenom }}</p>
                </div>
                <div class="flip-box-back">
                    <div class="membreEquipeDescription">
                        <p class="team-member-description">{{ $coach->description}}</p>
                    </div>
                    <div class="membreEquipeRS">
                            <a href="mailto:{{ $coach->email }}">
                                <img src="{{ asset('image/mail.png') }}" alt="courriel">
                            </a>
                            <a target="_blank" href="$coach->facebook">
                                <img src="{{ asset('image/fb.png') }}" alt="fb">
                            </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>




    <div class="coach">
        <div class="photo-coach">
            <img src="{{ asset('storage/coach_images/' . $coach->photo) }}" alt="{{ $coach->prenom }}">
        </div>
        <div class="info-coach">

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
            <p class="description-coach">{{ $coach->description}}</p>
            <div class="contact-coach">
                <a href="mailto:{{ $coach->email }}"><img src="{{ asset('image/mail.png') }}" alt="mail"></a>
                <a href="{{ $coach->facebook }}"><img src="{{ asset('image/fb.png') }}" alt="fb"></a>
            </div>
        </div>
    </div>