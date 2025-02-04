<x-app>
    <div class="h-full flex flex-col gap-8 items-center justify-center">
        <h1 class="text-2xl text-center font-semibold">
            “You do not rise to the level of your goals. <br /> You fall to the level of your systems.”
        </h1>
        <nav class="flex flex-col gap-1 items-center">
            <ul class="join">
                <li>
                    <a href="{{ route('stories.index', ['identity' => 1]) }}"
                        class="btn btn-ghost shadow btn-square btn-xl join-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            fill="none">
                            <path
                                d="M2.01792 20.3051C3.14656 21.9196 8.05942 23.1871 10.3797 20.1645C12.8894 21.3649 17.0289 20.9928 20.3991 19.1134C20.8678 18.8521 21.3112 18.5222 21.5827 18.0593C22.1957 17.0143 22.2102 15.5644 21.0919 13.4251C19.2274 8.77072 15.874 4.68513 14.5201 3.04212C14.2421 2.78865 12.4687 2.42868 11.3872 2.08279C10.9095 1.93477 10.02 1.83664 8.95612 3.23862C8.45176 3.90329 6.16059 5.5357 9.06767 6.63346C9.51805 6.74806 9.84912 6.95939 11.9038 6.58404C12.1714 6.53761 12.8395 6.58404 13.3103 7.41041L14.2936 8.81662C14.3851 8.94752 14.4445 9.09813 14.4627 9.25682C14.635 10.7557 14.6294 12.6323 15.4651 13.5826C14.1743 12.6492 10.8011 11.5406 8.2595 14.6951M2.00189 12.94C3.21009 11.791 6.71197 9.97592 10.4179 12.5216"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('stories.index', ['identity' => 2]) }}"
                        class="btn btn-ghost shadow btn-square btn-xl join-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            fill="none">
                            <path
                                d="M16 10L17.2265 11.0572C17.7422 11.5016 18 11.7239 18 12C18 12.2761 17.7422 12.4984 17.2265 12.9428L16 14"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M8 10L6.77346 11.0572C6.25782 11.5016 6 11.7239 6 12C6 12.2761 6.25782 12.4984 6.77346 12.9428L8 14"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M13 9L11 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M2.5 12C2.5 7.52166 2.5 5.28249 3.89124 3.89124C5.28249 2.5 7.52166 2.5 12 2.5C16.4783 2.5 18.7175 2.5 20.1088 3.89124C21.5 5.28249 21.5 7.52166 21.5 12C21.5 16.4783 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4783 2.5 12Z"
                                stroke="currentColor" stroke-width="1.5" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('stories.index', ['identity' => 3]) }}"
                        class="btn btn-ghost shadow btn-square btn-xl join-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            fill="none">
                            <path
                                d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="{{ route('stories.index', ['identity' => 4]) }}"
                        class="btn btn-ghost shadow btn-square btn-xl join-item">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
                            fill="none">
                            <path
                                d="M5.5 21L16.5 21C18.3856 21 19.3284 21 19.9142 20.4142C20.5 19.8284 20.5 18.8856 20.5 17L20.5 11C20.5 9.11438 20.5 8.17157 19.9142 7.58579C19.3284 7 18.3856 7 16.5 7L8.5 7"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M8.5 21H4.5C3.39543 21 2.5 20.1046 2.5 19M2.5 19C2.5 17.8954 3.39543 17 4.5 17V17C6.38562 17 7.32843 17 7.91421 16.4142C8.5 15.8284 8.5 14.8856 8.5 13V8C8.5 6.11438 8.5 5.17157 7.91421 4.58579C7.32843 4 6.38562 4 4.5 4V4C3.39543 4 2.5 4.89543 2.5 6V19Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            <path
                                d="M11.5 16.3569H11.831C12.1209 16.3569 12.2658 16.3569 12.388 16.3856C12.5102 16.4144 12.7427 16.5307 13.2077 16.7634C14.8103 17.5655 15.8792 16.1625 16.8037 15.0273C17.2679 14.4572 17.5 14.1722 17.5 13.9999C17.5 13.8277 17.2679 13.5427 16.8036 12.9726C15.8792 11.8374 14.8103 10.4345 13.2077 11.2366C12.7427 11.4693 12.5102 11.5856 12.388 11.6144C12.2658 11.6431 12.1209 11.6431 11.831 11.6431L11.5 11.6431"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M20.5 16L22.5 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M20.5 20L22.5 20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M20.5 12L22.5 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M20.5 8L22.5 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</x-app>
