
<div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-dark rounded-2xl shadow" style="background-color: #121212;    padding: 30px 20px 15px 20px;width: 45vw;">
            <p class="text-center text-white" style="font-size: 25px;border-bottom: 1px solid #c7c3c3a6;line-height: 57px;font-weight: 700;">Upload</p>
            <div id="background-show">
                <p class="text-center text-white" style="font-size: 25px;line-height: 57px;font-weight: 700;">Select type</p>
                <div style="" class="items-center  mt-8 font-medium text-gray-900 grid grid-cols-2 whitespace-nowrap dark:text-white">
                    <div class="flex  w-full">
                        <label for="imageUpload" data-id="{{$menu->id}}" id="imagePrevieww" style="background-size: cover;background-repeat: no-repeat;background-position: center;margin-top:0px!important;" class="flex flex-col mt-0 items-center justify-center w-full h-40   cursor-pointer ">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6" id="image-previ">
                                <svg width="98" height="136" viewBox="0 0 98 136" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="49" cy="49" r="49" fill="white" fill-opacity="0.07"/>
                                    <path d="M30.5359 62.7392L30.4967 62.7784C29.9675 61.622 29.6343 60.3088 29.4971 58.8584C29.6343 60.2892 30.0067 61.5828 30.5359 62.7392Z" fill="white" fill-opacity="0.87"/>
                                    <path d="M43.1199 45.8247C45.6962 45.8247 47.7847 43.7362 47.7847 41.1599C47.7847 38.5836 45.6962 36.4951 43.1199 36.4951C40.5436 36.4951 38.4551 38.5836 38.4551 41.1599C38.4551 43.7362 40.5436 45.8247 43.1199 45.8247Z" fill="white" fill-opacity="0.87"/>
                                    <path d="M57.2118 29.3994H40.787C33.6526 29.3994 29.3994 33.6526 29.3994 40.787V57.2118C29.3994 59.3482 29.7718 61.2102 30.497 62.7782C32.1826 66.5022 35.789 68.5994 40.787 68.5994H57.2118C64.3462 68.5994 68.5994 64.3462 68.5994 57.2118V52.7234V40.787C68.5994 33.6526 64.3462 29.3994 57.2118 29.3994ZM65.4046 49.9794C63.8758 48.6662 61.4062 48.6662 59.8774 49.9794L51.7238 56.9766C50.195 58.2898 47.7254 58.2898 46.1966 56.9766L45.5302 56.4278C44.1386 55.2126 41.9238 55.095 40.3558 56.1534L33.0254 61.073C32.5942 59.9754 32.3394 58.7014 32.3394 57.2118V40.787C32.3394 35.2598 35.2598 32.3394 40.787 32.3394H57.2118C62.739 32.3394 65.6594 35.2598 65.6594 40.787V50.195L65.4046 49.9794Z" fill="white" fill-opacity="0.87"/>
                                    <path d="M28.2784 131V119.364H32.4261C33.3314 119.364 34.0814 119.528 34.6761 119.858C35.2708 120.187 35.7159 120.638 36.0114 121.21C36.3068 121.778 36.4545 122.419 36.4545 123.131C36.4545 123.847 36.3049 124.491 36.0057 125.062C35.7102 125.631 35.2633 126.081 34.6648 126.415C34.0701 126.744 33.322 126.909 32.4205 126.909H29.5682V125.42H32.2614C32.8333 125.42 33.2973 125.322 33.6534 125.125C34.0095 124.924 34.2708 124.652 34.4375 124.307C34.6042 123.962 34.6875 123.57 34.6875 123.131C34.6875 122.691 34.6042 122.301 34.4375 121.96C34.2708 121.619 34.0076 121.352 33.6477 121.159C33.2917 120.966 32.822 120.869 32.2386 120.869H30.0341V131H28.2784ZM39.6673 125.818V131H37.9684V119.364H39.6446V123.693H39.7525C39.9571 123.223 40.2696 122.85 40.69 122.574C41.1105 122.297 41.6597 122.159 42.3377 122.159C42.9362 122.159 43.459 122.282 43.9059 122.528C44.3567 122.775 44.7052 123.142 44.9514 123.631C45.2014 124.116 45.3264 124.722 45.3264 125.449V131H43.6275V125.653C43.6275 125.013 43.4627 124.517 43.1332 124.165C42.8036 123.809 42.3453 123.631 41.7582 123.631C41.3567 123.631 40.9968 123.716 40.6786 123.886C40.3643 124.057 40.1161 124.307 39.9343 124.636C39.7563 124.962 39.6673 125.356 39.6673 125.818ZM50.8616 131.176C50.0434 131.176 49.3294 130.989 48.7195 130.614C48.1097 130.239 47.6362 129.714 47.2991 129.04C46.9619 128.366 46.7934 127.578 46.7934 126.676C46.7934 125.771 46.9619 124.979 47.2991 124.301C47.6362 123.623 48.1097 123.097 48.7195 122.722C49.3294 122.347 50.0434 122.159 50.8616 122.159C51.6797 122.159 52.3938 122.347 53.0036 122.722C53.6135 123.097 54.0869 123.623 54.4241 124.301C54.7612 124.979 54.9297 125.771 54.9297 126.676C54.9297 127.578 54.7612 128.366 54.4241 129.04C54.0869 129.714 53.6135 130.239 53.0036 130.614C52.3938 130.989 51.6797 131.176 50.8616 131.176ZM50.8672 129.75C51.3975 129.75 51.8369 129.61 52.1854 129.33C52.5339 129.049 52.7915 128.676 52.9581 128.21C53.1286 127.744 53.2138 127.231 53.2138 126.67C53.2138 126.114 53.1286 125.602 52.9581 125.136C52.7915 124.667 52.5339 124.29 52.1854 124.006C51.8369 123.722 51.3975 123.58 50.8672 123.58C50.3331 123.58 49.89 123.722 49.5377 124.006C49.1892 124.29 48.9297 124.667 48.7593 125.136C48.5926 125.602 48.5093 126.114 48.5093 126.67C48.5093 127.231 48.5926 127.744 48.7593 128.21C48.9297 128.676 49.1892 129.049 49.5377 129.33C49.89 129.61 50.3331 129.75 50.8672 129.75ZM60.4919 122.273V123.636H55.7249V122.273H60.4919ZM57.0033 120.182H58.7021V128.438C58.7021 128.767 58.7514 129.015 58.8499 129.182C58.9483 129.345 59.0752 129.456 59.2305 129.517C59.3896 129.574 59.562 129.602 59.7476 129.602C59.884 129.602 60.0033 129.593 60.1055 129.574C60.2078 129.555 60.2874 129.54 60.3442 129.528L60.651 130.932C60.5525 130.97 60.4124 131.008 60.2305 131.045C60.0487 131.087 59.8215 131.11 59.5487 131.114C59.1018 131.121 58.6851 131.042 58.2987 130.875C57.9124 130.708 57.5999 130.451 57.3612 130.102C57.1226 129.754 57.0033 129.316 57.0033 128.79V120.182ZM65.5456 131.176C64.7274 131.176 64.0134 130.989 63.4035 130.614C62.7937 130.239 62.3202 129.714 61.9831 129.04C61.6459 128.366 61.4774 127.578 61.4774 126.676C61.4774 125.771 61.6459 124.979 61.9831 124.301C62.3202 123.623 62.7937 123.097 63.4035 122.722C64.0134 122.347 64.7274 122.159 65.5456 122.159C66.3637 122.159 67.0778 122.347 67.6876 122.722C68.2975 123.097 68.7709 123.623 69.1081 124.301C69.4452 124.979 69.6137 125.771 69.6137 126.676C69.6137 127.578 69.4452 128.366 69.1081 129.04C68.7709 129.714 68.2975 130.239 67.6876 130.614C67.0778 130.989 66.3637 131.176 65.5456 131.176ZM65.5512 129.75C66.0815 129.75 66.5209 129.61 66.8694 129.33C67.2179 129.049 67.4755 128.676 67.6421 128.21C67.8126 127.744 67.8978 127.231 67.8978 126.67C67.8978 126.114 67.8126 125.602 67.6421 125.136C67.4755 124.667 67.2179 124.29 66.8694 124.006C66.5209 123.722 66.0815 123.58 65.5512 123.58C65.0171 123.58 64.574 123.722 64.2217 124.006C63.8732 124.29 63.6137 124.667 63.4433 125.136C63.2766 125.602 63.1933 126.114 63.1933 126.67C63.1933 127.231 63.2766 127.744 63.4433 128.21C63.6137 128.676 63.8732 129.049 64.2217 129.33C64.574 129.61 65.0171 129.75 65.5512 129.75Z" fill="white" fill-opacity="0.87"/>
                                    </svg>
                                    
                            </div>
                            
                            <input  type="file"   class="hidden" id="imageUpload" accept=".png, .jpg, .jpeg"/>
    
                        </label>     
                    </div> 
    
                    <div class="flex  w-full">
                        <label for="videoUpload" data-id="{{$menu->id}}" id="videoPreview" style="backgeound-image:url();background-size: cover;background-repeat: no-repeat;background-position: center;margin-top:0px!important;" class="flex flex-col mt-0 items-center justify-center w-full h-40 cursor-pointer ">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6" id="image-prev">
                                <svg width="98" height="136" viewBox="0 0 98 136" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="49" cy="49" r="49" fill="white" fill-opacity="0.07"/>
                                    <path d="M66.9342 37.5738C66.1306 37.1426 64.445 36.6918 62.1518 38.299L59.2706 40.3374C59.055 34.2418 56.409 31.8506 49.9802 31.8506H38.2202C31.517 31.8506 28.9102 34.4574 28.9102 41.1606V56.8406C28.9102 61.3486 31.3602 66.1506 38.2202 66.1506H49.9802C56.409 66.1506 59.055 63.7594 59.2706 57.6638L62.1518 59.7022C63.367 60.5646 64.4254 60.839 65.2682 60.839C65.9934 60.839 66.5618 60.6234 66.9342 60.4274C67.7378 60.0158 69.0902 58.8986 69.0902 56.0958V41.9054C69.0902 39.1026 67.7378 37.9854 66.9342 37.5738ZM47.0402 47.7854C45.0214 47.7854 43.3554 46.139 43.3554 44.1006C43.3554 42.0622 45.0214 40.4158 47.0402 40.4158C49.059 40.4158 50.725 42.0622 50.725 44.1006C50.725 46.139 49.059 47.7854 47.0402 47.7854Z" fill="white" fill-opacity="0.87"/>
                                    <path d="M29.7955 119.364L33.0341 128.841H33.1648L36.4034 119.364H38.3011L34.1136 131H32.0852L27.8977 119.364H29.7955ZM39.4372 131V122.273H41.136V131H39.4372ZM40.2951 120.926C39.9997 120.926 39.7459 120.828 39.5338 120.631C39.3254 120.43 39.2213 120.191 39.2213 119.915C39.2213 119.634 39.3254 119.396 39.5338 119.199C39.7459 118.998 39.9997 118.898 40.2951 118.898C40.5906 118.898 40.8425 118.998 41.0508 119.199C41.2629 119.396 41.369 119.634 41.369 119.915C41.369 120.191 41.2629 120.43 41.0508 120.631C40.8425 120.828 40.5906 120.926 40.2951 120.926ZM46.2806 131.17C45.576 131.17 44.9473 130.991 44.3942 130.631C43.845 130.267 43.4132 129.75 43.0988 129.08C42.7882 128.405 42.6329 127.597 42.6329 126.653C42.6329 125.71 42.7901 124.903 43.1045 124.233C43.4226 123.562 43.8582 123.049 44.4113 122.693C44.9643 122.337 45.5912 122.159 46.292 122.159C46.8336 122.159 47.2692 122.25 47.5988 122.432C47.9321 122.61 48.1897 122.818 48.3715 123.057C48.5571 123.295 48.701 123.506 48.8033 123.688H48.9056V119.364H50.6045V131H48.9454V129.642H48.8033C48.701 129.828 48.5533 130.04 48.3601 130.278C48.1707 130.517 47.9094 130.725 47.576 130.903C47.2427 131.081 46.8109 131.17 46.2806 131.17ZM46.6556 129.722C47.1442 129.722 47.5571 129.593 47.8942 129.335C48.2351 129.074 48.4927 128.712 48.667 128.25C48.845 127.788 48.934 127.25 48.934 126.636C48.934 126.03 48.8469 125.5 48.6726 125.045C48.4984 124.591 48.2427 124.237 47.9056 123.983C47.5685 123.729 47.1518 123.602 46.6556 123.602C46.1442 123.602 45.7181 123.735 45.3772 124C45.0363 124.265 44.7787 124.627 44.6045 125.085C44.434 125.544 44.3488 126.061 44.3488 126.636C44.3488 127.22 44.4359 127.744 44.6101 128.21C44.7844 128.676 45.042 129.045 45.3829 129.318C45.7276 129.587 46.1518 129.722 46.6556 129.722ZM56.3825 131.176C55.5227 131.176 54.7822 130.992 54.1609 130.625C53.5435 130.254 53.0662 129.733 52.7291 129.062C52.3958 128.388 52.2291 127.598 52.2291 126.693C52.2291 125.799 52.3958 125.011 52.7291 124.33C53.0662 123.648 53.5359 123.116 54.1382 122.733C54.7443 122.35 55.4526 122.159 56.2632 122.159C56.7556 122.159 57.2329 122.241 57.695 122.403C58.1572 122.566 58.5719 122.822 58.9394 123.17C59.3068 123.519 59.5966 123.972 59.8087 124.528C60.0208 125.081 60.1269 125.754 60.1269 126.545V127.148H53.1894V125.875H58.4621C58.4621 125.428 58.3712 125.032 58.1894 124.688C58.0075 124.339 57.7519 124.064 57.4223 123.864C57.0966 123.663 56.714 123.562 56.2746 123.562C55.7973 123.562 55.3806 123.68 55.0246 123.915C54.6723 124.146 54.3996 124.449 54.2064 124.824C54.017 125.195 53.9223 125.598 53.9223 126.034V127.028C53.9223 127.612 54.0246 128.108 54.2291 128.517C54.4375 128.926 54.7272 129.239 55.0984 129.455C55.4697 129.667 55.9034 129.773 56.3996 129.773C56.7216 129.773 57.0151 129.727 57.2803 129.636C57.5454 129.542 57.7746 129.402 57.9678 129.216C58.1609 129.03 58.3087 128.801 58.4109 128.528L60.0189 128.818C59.8901 129.292 59.6591 129.706 59.3257 130.062C58.9962 130.415 58.5814 130.689 58.0814 130.886C57.5852 131.08 57.0189 131.176 56.3825 131.176ZM65.2799 131.176C64.4618 131.176 63.7477 130.989 63.1379 130.614C62.528 130.239 62.0546 129.714 61.7174 129.04C61.3803 128.366 61.2118 127.578 61.2118 126.676C61.2118 125.771 61.3803 124.979 61.7174 124.301C62.0546 123.623 62.528 123.097 63.1379 122.722C63.7477 122.347 64.4618 122.159 65.2799 122.159C66.0981 122.159 66.8121 122.347 67.422 122.722C68.0318 123.097 68.5053 123.623 68.8424 124.301C69.1796 124.979 69.3481 125.771 69.3481 126.676C69.3481 127.578 69.1796 128.366 68.8424 129.04C68.5053 129.714 68.0318 130.239 67.422 130.614C66.8121 130.989 66.0981 131.176 65.2799 131.176ZM65.2856 129.75C65.8159 129.75 66.2553 129.61 66.6038 129.33C66.9523 129.049 67.2099 128.676 67.3765 128.21C67.547 127.744 67.6322 127.231 67.6322 126.67C67.6322 126.114 67.547 125.602 67.3765 125.136C67.2099 124.667 66.9523 124.29 66.6038 124.006C66.2553 123.722 65.8159 123.58 65.2856 123.58C64.7515 123.58 64.3083 123.722 63.9561 124.006C63.6076 124.29 63.3481 124.667 63.1777 125.136C63.011 125.602 62.9277 126.114 62.9277 126.67C62.9277 127.231 63.011 127.744 63.1777 128.21C63.3481 128.676 63.6076 129.049 63.9561 129.33C64.3083 129.61 64.7515 129.75 65.2856 129.75Z" fill="white" fill-opacity="0.87"/>
                                    </svg>
                            </div>
                            <input  type="file"   class="hidden" id="videoUpload" accept=".mpeg,.ogg,.mp4,.webm,.3gp,.mov,.flv,.avi,.wmv,.ts"/>
                        </label>     
                    </div> 
    
                </div>
            </div>
        </div>
    </div>