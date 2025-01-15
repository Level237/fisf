
import { NavLink } from "react-router-dom"
import slide from "../assets/slide01.jpg"
import { Separator } from './ui/separator'
export default function Hero() {
  return (
   <>
    <div style={{ background:`url(${slide})`,backgroundPosition:"top",backgroundSize:"cover",backgroundRepeat:"no-repeat" }} 
    className='w-full max-sm:hidden z-10  bg-[#02abee]  rounded-md relative h-[85vh] justify-start pt-20 flex flex-col items-center'>
  <div className='absolute bg-[#00723e] h-24 flex gap-5 flex-row justify-center items-center px-12 border border-white border-[0.1rem]  top-[-2rem] z-[9999] '>
          <div className=''>
            <div className='flex  flex-row justify-between items-end gap-8'>
                <NavLink to="/" className='text-2xl cursor-pointer font-semibold text-white'>La FISF</NavLink>
                <Separator className='bg-white h-7 w-1' orientation='vertical'/>
            </div>
          </div>
          <div className=''>
              <div className='flex flex-row justify-between items-end gap-8'>
                  <NavLink to="/actualites" className='text-2xl cursor-pointer font-semibold ml-3 text-white'>Actualités</NavLink>
                    <Separator className='bg-white h-7 w-1' orientation='vertical' />
                </div>
              
          </div>
          <div className=''>
          <div className='flex flex-row justify-between items-end gap-8'>
              <NavLink to="/calendrier" className='text-2xl cursor-pointer font-semibold ml-3 text-white'>Calendrier</NavLink>
                <Separator className='bg-white h-7 w-1' orientation='vertical' />
            </div>
          </div>
          <div className=''>
          <div className='flex flex-row justify-between items-end gap-8'>
              <NavLink to="/classements" className='text-2xl cursor-pointer font-semibold ml-3 text-white'>Classement</NavLink>
                <Separator className='bg-white h-7 w-1' orientation='vertical' />
            </div>
          </div>
          <div className=''>
          <div className='flex flex-row justify-between items-end gap-8'>
              <h2 className='text-2xl cursor-pointer font-semibold ml-3 text-white'>Evènements</h2>
                <Separator className='bg-white h-7 w-1' orientation='vertical' />
            </div>
          </div>
          <div className=''>
          <div className='flex flex-row justify-between items-end gap-8'>
              <h2 className='text-2xl cursor-pointer font-semibold ml-3 text-white'>Forum</h2>
                
            </div>
          </div>
</div>
  </div>
  <div style={{ background:`url(${slide})`,backgroundPosition:" bottom 1px left -150px",backgroundSize:"cover",backgroundRepeat:"no-repeat" }}  className='hidden w-full h-96 max-sm:block'>
    
  </div>
   </>
  )
}
