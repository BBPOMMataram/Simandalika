<div class="nft">
    <div class='main h-full'>
        <img class='tokenImage' src="{{ $logo ? Storage::url($logo) : asset('images/bpomri_without_label.png') }}"
            alt="LOGO" />
        <h2 class="text-2xl">{{ $title }}</h2>
        <p class='description'>{{ $desc }}</p>
        <div class='tokenInfo mt-auto'>
            <div class="price">
                <ins>◘</ins>
                <p><span class="clicks">{{ $clicks ?: 0 }}</span> clicks</p>
            </div>
            <div class="duration">
                <p class="hover:underline"><a class="visit" target="_blank" href="{{ route('visit-link', $id) }}">visit</a></p>
                <ins>&#129133;</ins>
            </div>
        </div>
        <hr />
        <div class='creator gap-2 py-2'>
            <div class=''>
                {{-- <img src="https://images.unsplash.com/photo-1620121692029-d088224ddc74?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80"
                    alt="Creator" /> --}}
                <svg fill="none" viewBox="0 0 24 24" height="20" width="20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linejoin="round" fill="#707277" stroke-linecap="round" stroke-width="2"
                        stroke="#707277"
                        d="M6.57757 15.4816C5.1628 16.324 1.45336 18.0441 3.71266 20.1966C4.81631 21.248 6.04549 22 7.59087 22H16.4091C17.9545 22 19.1837 21.248 20.2873 20.1966C22.5466 18.0441 18.8372 16.324 17.4224 15.4816C14.1048 13.5061 9.89519 13.5061 6.57757 15.4816Z">
                    </path>
                    <path stroke-width="2" fill="#707277" stroke="#707277"
                        d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z">
                    </path>
                </svg>
            </div>
            <p><ins>PIC : </ins> {{ $pic }}</p>
        </div>
    </div>
</div>
<script>
    // Attach event listeners to all visit links
    document.querySelectorAll('.visit').forEach(link => {
        link.addEventListener('click', function(event) {
            setTimeout(() => {
                window.location.reload();
            }, 1000);
            // console.log(this.closest('.tokenInfo'));
            
            // Find the nearest card containing the click-count element
            // const card = this.closest('.tokenInfo');
            // let clickCountElement = card.querySelector('.clicks');
            
            // // Get the current click count, increment it, and update the element
            // let currentCount = parseInt(clickCountElement.textContent);
            // clickCountElement.textContent = currentCount + 1;

            // No need to prevent default behavior; the link will open in a new tab
        });
    });
</script>