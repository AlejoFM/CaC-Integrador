<div class="col  rounded border border-gray-500/50 gap-10 m-4 p-0 d-flex flex-column" >
    <img src="{{$imagePath}}" alt="card-image" class="w-100 h-auto">
    <div class="d-flex flex-column align-items-start p-2" >
        <div class="flex-row">
        <span class="text-white p-1"
            style="{{ $cardCategory === 'Javascript' ? 'background-color:#ffbf07; border-radius: 3px; color:dark!important; '
            : 'background-color:#6c757b; border-radius: 3px; '}} width:fit-content;  font-weight:bold">
            {{$cardCategory}}</span>
        <span class="text-white p-1 font-weight-bold"
              style="{{ $cardCategory2 === 'React' ? 'background-color:#17a2b7; border-radius: 3px; '
            : 'background-color:#dc3546; border-radius: 3px; '}} width:fit-content; font-weight:bold">
            {{$cardCategory2}}</span>
        </div>
        <h2>{{$cardTitle}}</h2>
        <p>{{$cardDescription}}</p>
    </div>
</div>
<style>
    @media (width <= 500px) {
        #cards{
            display: flex!important;
            flex-direction: column!important;
            align-content: center!important;
            width: 100%;
            margin: auto;
        }
    }
</style>
