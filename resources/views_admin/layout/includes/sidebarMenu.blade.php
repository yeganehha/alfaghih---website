@forelse($Menus as $menu)
    @if ( $menu->isBreaker )

        <li class="kt-menu__section ">
            <h4 class="kt-menu__section-text">{{$menu->title}}</h4>
            <i class="kt-menu__section-icon flaticon-more-v2"></i>
        </li>
    @else
        <li class="kt-menu__item @if ( $menu->child->count() ) kt-menu__item--submenu @endif @if( $menu->isViewActive() ) kt-menu__item--active @if ( $menu->child->count() ) kt-menu__item--open @endif @endif" aria-haspopup="true" @if ( $menu->child->count() ) data-ktmenu-submenu-toggle="hover" @endif>
            <a @if ( $menu->child->count() ) href="javascript:;" @elseif(! is_null($menu->route)) href="{{ route($menu->route['route_name'] , \Illuminate\Support\Arr::except($menu->route,'route_name')) }}" @else href="{{ $menu->link }}" @endif class="kt-menu__link  @if ( $menu->child->count() ) kt-menu__toggle @endif">
                <i class="{{$menu->icon ?? "kt-menu__link-bullet kt-menu__link-bullet--dot" }}">@if ( is_null($menu->icon) ) <span></span> @endif</i>
                <span class="kt-menu__link-text">{{$menu->title}}</span>
                @if ( isset($menu->customData['counter'] , $menu->customData['counter']['class'], $menu->customData['counter']['method']) )
                    @if ( class_exists($menu->customData['counter']['class']) and method_exists($menu->customData['counter']['class'] , $menu->customData['counter']['method']) )
                        @if ( ( $numberOFCounterInMenu = (new ($menu->customData['counter']['class'])() )->{$menu->customData['counter']['method']}() ) > 0 )
                            <span class="badge badge-info right h-100 mt-2">{{ $numberOFCounterInMenu }}</span>
                        @endif
                    @endif
                @endif
            </a>
            @if ( $menu->child->count() )
                <div class="kt-menu__submenu ">
                    <span class="kt-menu__arrow"></span>
                    <ul class="kt-menu__subnav">
                        @include('layout.includes.sidebarMenu' , ['Menus' =>  $menu->child])
                    </ul>
                </div>
            @endif
        </li>
    @endif
@empty
@endforelse
