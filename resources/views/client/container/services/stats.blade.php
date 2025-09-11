<div class="w-full flex items-center justify-around p-20">
   <div class="w-[300px] flex items-center justify-center flex-col gap-3">
      <h1 class="text-[#000D51] text-7xl font-semibold ">
         <span class="counter" data-target="250">0</span>+
      </h1>
      <p class="text-[#000D51] text-xl font-normal ">Successful Loan Approvals</p>
   </div>
   <div class="w-[300px] flex items-center justify-center flex-col gap-3">
      <h1 class="text-[#000D51] text-7xl font-semibold ">
         <span class="counter" data-target="100">0</span>+
      </h1>
      <p class="text-[#000D51] text-xl font-normal ">Properties Bought & Sold</p>
   </div>
   <div class="w-[300px] flex items-center justify-center flex-col gap-3">
      <h1 class="text-[#000D51] text-7xl font-semibold ">24/7</h1>
      <p class="text-[#000D51] text-xl font-normal ">Response Guarantee</p>
   </div>
</div>

<script>
   const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.5
   };

   const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
         if (entry.isIntersecting) {
            const counters = entry.target.querySelectorAll('.counter');
            counters.forEach(counter => {
               animateCounter(counter);
            });
            observer.unobserve(entry.target);
         }
      });
   }, observerOptions);

   const statsSection = document.querySelector('.w-full.flex.items-center.justify-around');
   observer.observe(statsSection);

   const animateCounter = (counter) => {
      const target = parseInt(counter.getAttribute('data-target'));
      let current = 0;
      const increment = target / 100;

      const updateCounter = () => {
         if (current < target) {
            current += increment;
            counter.textContent = Math.ceil(current);
            setTimeout(updateCounter, 20);
         } else {
            counter.textContent = target;
         }
      }

      updateCounter();
   }
</script>