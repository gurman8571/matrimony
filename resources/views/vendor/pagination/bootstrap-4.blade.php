<link rel="stylesheet" href="/css/tailwind.css" />
<script src="https://kit.fontawesome.com/272c99ad92.js" crossorigin="anonymous"></script>
<style>
ul{
display:flex;
justify-content:center;
border-radius:9px;
} 
li{
    padding:14px;
     width:3%;      
background:#fff;

}  
.pge-item{
    text-align:center;
}
.page-item-active{
   
    color:white;
    text-align:center;

} 
nav{
    border-radius:20px;
}
.page-link{
text-align:end;
font-size:15px;
}
    </style>
@if ($paginator->hasPages())
    <nav>
 
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link dark:text-dark " aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link dark:text-dark " href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="fas fa-chevron-left"></i></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li  class=" page-item-active bg-primary-light " aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item dark:text-dark "><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link dark:text-dark " href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')"><i class="fas fa-chevron-right"></i></a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link dark:text-dark " aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif
<div class=" text-center m-4 mt-2 text-lg" >
            <div>
                <p class=" dark:text-white">
                    {!! __('Showing') !!}
                    <span class="font-medium">{{ $paginator->firstItem() }}</span>
                    {!! __('to') !!}
                    <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>