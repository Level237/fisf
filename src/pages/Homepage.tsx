import Header from '@/components/Header'
import Hero from '@/components/Hero'
import bgCalender from '../assets/BG-calendrier.jpg'
import CalenderList from '@/components/CalenderList'
import { Button } from '@/components/ui/button'
import Actuality from '@/components/Actualités'

export default function Homepage() {
  return (
    <section>
      <Header/>
      <Hero/>
      <section className='py-12  flex flex-col gap-12'>
            <div className='flex flex-row items-center justify-center'>
                    <h2 className='text-2xl text-center tracking-tight max-w-2xl'>La Fédération Internationale de Scrabble® Francophone (FISF) 

promeut la pratique du Scrabble® en langue française, 

et lui apporte un cadre réglementaire applicable

dans toute la Francophonie.</h2>
            </div>

            <div className='mx-24'>
              <h2 className='text-[#107a5f] text-3xl font-bold'>Calendrier</h2>
            </div>
            <div style={{ background:`url(${bgCalender})`,backgroundPosition:"top",backgroundSize:"cover",backgroundRepeat:"no-repeat" }} 
    className='w-full bg-[#02abee]  rounded-md relative h-[26rem] justify-start pt-20 flex flex-col items-center'>
      <CalenderList/>
      
    </div>
    <div className='flex justify-center mt-10'>
    <Button className='bg-red-500 text-2xl px-8 py-6 text-white rounded-full'>Calendrier complet</Button>
    </div>
    <div className='mx-24'>
              <h2 className='text-[#107a5f] text-3xl font-bold'>Actualités</h2>
            </div>

            <div>
              <Actuality/>
            </div>
            <div className='flex justify-center mt-1'>
    <Button className='bg-red-500 text-2xl px-8 py-6 text-white rounded-full'>Plus d'actualités</Button>
    </div>
      </section>
    </section>
  )
}
