<template>
  <div class="flex flex-wrap lg:w-3/4 mx-auto mb-20 shadow-2xl rounded-lg border border-gray-200">
    <div class="p-6 md:px-16 md:py-24 w-full md:w-1/2 border-b md:border-b-0 md:border-r">
      <h2 class="text-xl mb-8 text-indigo-600">Calculate Your Estimate</h2>
      <label for="selectService">Select service</label>
      <select v-model="selectedService" @change="updateInfo" type="select" id="selectService" class="form-select w-full mb-8 mt-2">
        <option selected value="">Select Service</option>
        <option v-for="service in services" :key="service.id">
          {{ service.name }}
        </option>
      </select>
      <label for="selectQuantity">Select Quantity</label>
      <input v-model.number="selectedQuantity" @input="updateInfo" type="number" min="0" id="selectQuantity" class="form-input w-full mt-2" />
    </div>

    <div class="p-6 md:p-16 md:w-1/2">
      <template v-if="selectedService != '' ">
        <div class="flex justify-around mb-6">
          <div class="price-demo left rounded-md shadow-xl" :style="{backgroundImage:  `url(${image})`}"></div>
          <div class="price-demo right rounded-md shadow-xl" :style="{backgroundImage:  `url(${image})`}"></div>
        </div>
        <div class="info">
          <table>
            <tr>
              <td class="pr-4 py-2 w-30 align-top">Service</td>
              <td class="px-4 py-2 w-30 align-top">{{ selectedService }}</td>
            </tr>
            <tr>
              <td class="pr-4 py-2 w-30 align-top">Quantity</td>
              <td class="px-4 py-2 w-30 align-top" v-if="selectedQuantity >= '0'">{{ selectedQuantity }} Images</td>
              <td class="px-4 py-2 w-30 align-top" v-else>0 Images</td>
            </tr>
          </table>
          <h2 class="text-xl mt-6 text-indigo-600">
            ${{ totalMin }} USD - ${{ totalMax }} USD
          </h2>
        </div>
      </template>
      <template v-else>
        <div class="h-full p-10 border text-center">
          <p class="text-gray-500">Select a service and a quantity to calculate your estimate.</p>
        </div>
      </template>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      selectedService: "",
      selectedQuantity: "",
      image: "",
      imageAfter: "",
      totalMin: "",
      totalMax: "",
      services: [
        {
          name: "Clipping Path Services",
          minPrice: 0.39,
          maxPrice: 10,
          image: "https://pixelsensepark.com/storage/website/services/clipping/71.png",
        },
        {
          name: "Color Variants",
          minPrice: 1,
          maxPrice: 5,
          image: "https://pixelsensepark.com/storage/website/services/color/61.png",
        },
        {
          name: "Drop Shadow Services",
          minPrice: 0.25,
          maxPrice: 4,
          image: "https://pixelsensepark.com/storage/website/services/shadow/63.png",
        },
        {
          name: "Ghost Mannequin Services",
          minPrice: 1,
          maxPrice: 5,
          image: "https://pixelsensepark.com/storage/website/services/mannequin/71.png",
        },
        {
          name: "Image Masking Services",
          minPrice: 1,
          maxPrice: 10,
          image: "https://pixelsensepark.com/storage/website/services/masking/71.png",
        },
        {
          name: "Jewelry Photo Editing Services",
          minPrice: 5,
          maxPrice: 30,
          image: "https://pixelsensepark.com/storage/website/services/jewelry/61.png",
        },
        {
          name: "Photo Retouching Services",
          minPrice: 1,
          maxPrice: 15,
          image: "https://pixelsensepark.com/storage/website/services/retouch/73.png",
        },
        {
          name: "Product Photo-editing Services",
          minPrice: 0.39,
          maxPrice: 5,
          image: "https://pixelsensepark.com/storage/website/services/product/63.png",
        },
        {
          name: "Real Estate Photo Edting Services(HDR)",
          minPrice: 1,
          maxPrice: 50,
          image: "https://pixelsensepark.com/storage/website/services/color/72.png",
        },
      ],
    };
  },
  methods: {
    updateInfo: function () {
      if(this.selectedService != ""){
        let service   = this.services.find((service) => service.name == this.selectedService);
        this.image    = service.image;
        this.totalMin = this.numberCurrection(service.minPrice * (this.selectedQuantity ?? 0));
        this.totalMax = this.numberCurrection(service.maxPrice * (this.selectedQuantity ?? 0));
      }
    },
    numberCurrection: function (num) {
      return num.toFixed(2).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    },
  },
};
</script>

<style scoped>
  .price-demo{
    width: 50%;
    margin-left: 10px;
    margin-right: 10px;
    background-size: auto 112%;
  }
  .price-demo::after{
    content: '';
    display: block;
    padding-bottom: 100%;
  }
  .price-demo.left{
    background-position: left center;
  }
  .price-demo.right{
    background-position: right center;
  }
</style>