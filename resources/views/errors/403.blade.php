<x-app-layout>
    <div class="flex flex-col justify-center items-center w-full h-[80vh]">
        <h1 class="text-3xl font-semibold">
            Forbidden
        </h1>
        <div class="w-full flex justify-center items-center">
            <a class="cta" href="{{ route('note.index') }}">
                <span>Back to Home</span>
                <svg width="15px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
            </a>
        </div>
    </div>
</x-app-layout>
<style>
    .cta {
        position: relative;
        margin: auto;
        padding: 12px 18px;
        transition: all 0.2s ease;
        border: none;
        background: none;
        cursor: pointer;
    }

    .cta:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        border-radius: 50px;
        background: #b1dae7;
        width: 45px;
        height: 45px;
        transition: all 0.3s ease;
    }

    .cta span {
        position: relative;
        font-family: "Ubuntu", sans-serif;
        font-size: 18px;
        font-weight: 700;
        letter-spacing: 0.05em;
        color: #234567;
    }

    .cta svg {
        position: absolute;
        top: 40%;
        left: 85%;
        margin-left: 10px;
        fill: none;
        stroke-linecap: round;
        stroke-linejoin: round;
        stroke: #234567;
        stroke-width: 2;
        transform: translateX(-5px);
        transition: all 0.3s ease;
    }

    .cta:hover:before {
        width: 120%;
        background: #b1dae7;
    }

    .cta:hover svg {
        transform: translateX(0);
    }

    .cta:active {
        transform: scale(0.95);
    }
</style>
