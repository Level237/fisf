import { HeaderSection } from '@/components/Header-section'
import { NavSection } from '@/components/NavSection'
import slide from "../assets/slideAfiliate.png"
import AfiliateCountryList from '@/components/AfiliateCountryList'
import { Footer } from '@/components/Footer'
export default function AfiliateCountry() {
  return (
    <section>
    <section className="flex flex-col">
            <HeaderSection/>
            <NavSection/>
    </section>
      <section className='mx-36 max-sm:mx-2  py-20'>
            <h2 className='text-[#00723e] text-4xl max-sm:text-3xl font-bold'>Les Pays Affiliés</h2>
      </section>

      <div style={{ background:`url(${slide})`,backgroundPosition:"top",backgroundSize:"cover",backgroundRepeat:"no-repeat" }} 
    className='w-full z-10 mt-5 h-96  bg-[#02abee]  rounded-md relative  justify-start pt-20 flex flex-col items-center'>

    </div>

    <section className="flex flex-col mt-12 max-sm:ml-3 mb-12 ml-36">
        <AfiliateCountryList/>
    </section>
    <Footer/>
    </section>
  )
}
