@extends('app')

@section('titre')
    Oukalê - Contrôle à Distance.
@endsection

@section('contenu')
<div class="-rotate-90main-panel">
<div class="content-wrapper">
    <div class="row">
        <!-- 1 -->
        <div class="col-lg-6 grid-margin stretch-card">

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Contrôle du Joystick</h4>
        <div class="joystick-container">
            <div class="joystick"></div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

<style>
    /* Styles pour la carte du joystick */
    .card {
        background: #f6f7fb;
    border: 1px solid #d1d3e2;
    border-radius: 15px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.2s ease;
    text-align: center;
    }

    .card:hover {
        transform: scale(1.02);
    }

    .card-title {
        font-size: 1.5rem;
        margin: 10px 0;
        color: #2cbb9b;
    }

    /* Styles pour le joystick */
    .joystick-container {
        width: 200px;
        height: 200px;
        background: #2cbb9b;
        border: 5px solid #000;
        border-radius: 50%;
        position: relative;
        overflow: hidden;
    }

    .joystick {
        width: 50px;
        height: 50px;
        background: #64CCC5;
        border: 3px solid #04364A;
        border-radius: 50%;
        position: absolute;
        top: 75px;
        left: 75px;
        cursor: pointer;
    }
</style>

<script>
    const joystick = document.querySelector('.joystick');
    const container = document.querySelector('.joystick-container');

    let isDragging = false;
    let initialX, initialY;

    joystick.addEventListener('mousedown', (e) => {
        isDragging = true;
        initialX = e.clientX - joystick.getBoundingClientRect().left;
        initialY = e.clientY - joystick.getBoundingClientRect().top;

        joystick.style.transition = 'none';
        container.style.transition = 'none';

        document.addEventListener('mousemove', onMouseMove);
        document.addEventListener('mouseup', onMouseUp);
    });

    function onMouseMove(e) {
        if (!isDragging) return;

        const containerRect = container.getBoundingClientRect();
        const containerLeft = containerRect.left;
        const containerTop = containerRect.top;

        const x = e.clientX - containerLeft - initialX;
        const y = e.clientY - containerTop - initialY;

        // Limiter le joystick à l'intérieur du conteneur
        const maxX = containerRect.width - joystick.clientWidth;
        const maxY = containerRect.height - joystick.clientHeight;

        const clampedX = Math.min(Math.max(x, 0), maxX);
        const clampedY = Math.min(Math.max(y, 0), maxY);

        joystick.style.left = clampedX + 'px';
        joystick.style.top = clampedY + 'px';
    }

    function onMouseUp() {
        isDragging = false;

        joystick.style.transition = '0.2s';
        container.style.transition = '0.2s';

        // Réinitialiser la position du joystick au centre
        const centerX = (container.getBoundingClientRect().width - joystick.clientWidth) / 2;
        const centerY = (container.getBoundingClientRect().height - joystick.clientHeight) / 2;

        joystick.style.left = centerX + 'px';
        joystick.style.top = centerY + 'px';

        document.removeEventListener('mousemove', onMouseMove);
        document.removeEventListener('mouseup', onMouseUp);
    }
</script>


@endsection
