@props(['isMultiRow' => false])

@if (! $isMultiRow)
    <div class="row grid grid-cols-6 gap-[10px] items-center px-[16px] py-[10px] border-b-[1px] border-gray-300 bg-gray-50 items-center">
        <!-- Mass Actions -->
        <div class="shimmer w-[24px] h-[24px]"></div>

        <div class="shimmer w-[100px] h-[17px]"></div>

        <div class="shimmer w-[100px] h-[17px]"></div>

        <div class="shimmer w-[100px] h-[17px]"></div>

        <div class="shimmer w-[100px] h-[17px]"></div>

        <div class="shimmer w-[100px] h-[17px] col-start-[none]"></div>
    </div>
@else
    <div class="row grid grid-cols-3 gap-[10px] items-center px-[16px] py-[10px] border-b-[1px] border-gray-300tems-center">
        <!-- Mass Actions -->
        <div class="flex gap-[10px] items-center">
            <div class="shimmer w-[24px] h-[24px]"></div>

            <div class="shimmer w-[200px] h-[17px]"></div>
        </div>

        <div class="shimmer w-[200px] h-[17px]"></div>

        <div class="shimmer w-[200px] h-[17px]"></div>
    </div>
@endif