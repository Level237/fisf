import { Separator } from "./ui/separator"

export const NavSection=()=>{

    return (
        <section className="max-sm:hidden">
            <div className='relative mx-36 bg-[#00723e] mt-[-35px]  flex gap-5 flex-row items-center  px-2 py-2 border border-white border-[0.1rem]   z-[9999] '>
          <div className=''>
            <div className='flex  flex-row  justify-between items-center gap-4'>
                <h2 className='text-2xl bg-white py-4 px-4 cursor-pointer flex  font-bold text-[#00723e]'>La FISF</h2>
                <Separator className='bg-white h-7 w-1' orientation='vertical'/>
            </div>
          </div>
          <div className=''>
              <div className='flex flex-row justify-between items-end gap-8'>
                  <h2 className='text-2xl cursor-pointer font-semibold ml-3 text-white'>Actualités</h2>
                    <Separator className='bg-white h-7 w-1' orientation='vertical' />
                </div>
              
          </div>
          <div className=''>
          <div className='flex flex-row justify-between items-end gap-8'>
              <h2 className='text-2xl cursor-pointer font-semibold ml-3 text-white'>Calendrier</h2>
                <Separator className='bg-white h-7 w-1' orientation='vertical' />
            </div>
          </div>
          <div className=''>
          <div className='flex flex-row justify-between items-end gap-8'>
              <h2 className='text-2xl cursor-pointer font-semibold ml-3 text-white'>Classement</h2>
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
        </section>
    )
}