<div
   class="w-full flex items-center justify-around padding-x padding-y xm:flex-col sm:flex-col xm:items-start sm:items-start xm:gap-5 sm:gap-5 xm:justify-start sm:justify-start">
   <div class="w-[300px] flex items-center justify-center flex-col gap-3 xm:w-full sm:w-full">
      <h1 class="text-[#000D51] heading font-semibold">
         <span class="counter" data-target="250">0</span>+
      </h1>
      <p class="text-[#000D51] paragraph font-normal">Successful Loan Approvals</p>
   </div>
   <div class="w-[300px] flex items-center justify-center flex-col gap-3 xm:w-full sm:w-full">
      <h1 class="text-[#000D51] heading font-semibold">
         <span class="counter" data-target="100">0</span>+
      </h1>
      <p class="text-[#000D51] paragraph font-normal">Properties Bought & Sold</p>
   </div>
   <div class="w-[300px] flex items-center justify-center flex-col gap-3 xm:w-full sm:w-full">
      <h1 class="text-[#000D51] heading font-semibold">24/7</h1>
      <p class="text-[#000D51] paragraph font-normal">Response Guarantee</p>
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