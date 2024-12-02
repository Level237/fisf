import React from 'react'
import { AspectRatio } from './ui/aspect-ratio'
import slide from "../assets/slide01.jpg"
import { Separator } from './ui/separator'
export default function Hero() {
  return (
    <div style={{ background:`url(${slide})`,backgroundPosition:"top",backgroundSize:"cover",backgroundRepeat:"no-repeat" }} 
    className='w-full z-10  bg-[#02abee]  rounded-md relative h-[85vh] justify-start pt-20 flex flex-col items-center'>
  <div className='absolute bg-[#00723e] h-24 flex gap-5 flex-row justify-center items-center px-12 border border-white border-[0.1rem]  top-[-2rem] z-[9999] '>
          <div className=''>
            <div className='flex flex-row justify-between items-end gap-8'>
                <h2 className='text-2xl font-semibold text-white'>La FISF</h2>
                <Separator className='bg-white h-7 w-1' orientation='vertical'/>
            </div>
              
          </div>
          <div className=''>
              <div className='flex flex-row justify-between items-end gap-8'>
                  <h2 className='text-2xl font-semibold ml-3 text-white'>Actualités</h2>
                    <Separator className='bg-white h-7 w-1' orientation='vertical' />
                </div>
              
          </div>
          <div className=''>
          <div className='flex flex-row justify-between items-end gap-8'>
              <h2 className='text-2xl font-semibold ml-3 text-white'>Calendrier</h2>
                <Separator className='bg-white h-7 w-1' orientation='vertical' />
            </div>
          </div>
          <div className=''>
          <div className='flex flex-row justify-between items-end gap-8'>
              <h2 className='text-2xl font-semibold ml-3 text-white'>Classement</h2>
                <Separator className='bg-white h-7 w-1' orientation='vertical' />
            </div>
          </div>
          <div className=''>
          <div className='flex flex-row justify-between items-end gap-8'>
              <h2 className='text-2xl font-semibold ml-3 text-white'>Evènements</h2>
                <Separator className='bg-white h-7 w-1' orientation='vertical' />
            </div>
          </div>
          <div className=''>
          <div className='flex flex-row justify-between items-end gap-8'>
              <h2 className='text-2xl font-semibold ml-3 text-white'>Forum</h2>
                
            </div>
          </div>
</div>
  </div>
  )
}
