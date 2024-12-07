import { HeaderSection } from '@/components/Header-section'
import { NavSection } from '@/components/NavSection'
import React from 'react'
import slide from "../assets/slideAfiliate.png"
export default function AfiliateCountry() {
  return (
    <section>
    <section className="flex flex-col">
            <HeaderSection/>
            <NavSection/>
    </section>
      <section className='mx-36  py-20'>
            <h2 className='text-[#00723e] text-4xl font-bold'>Les Pays Affiliés</h2>
      </section>

      <div style={{ background:`url(${slide})`,backgroundPosition:"top",backgroundSize:"cover",backgroundRepeat:"no-repeat" }} 
    className='w-full z-10 mt-5 h-96  bg-[#02abee]  rounded-md relative  justify-start pt-20 flex flex-col items-center'>

    </div>

    <section className="flex flex-col mt-12 ml-36">
        
    </section>
    </section>
  )
}
