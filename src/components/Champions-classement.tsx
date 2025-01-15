import {
    Table,
    TableBody,
    TableCell,
    TableHead,
    TableHeader,
    TableRow,
  } from "@/components/ui/table"
  import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card"
  import champion from "../assets/champion.jpg"
  interface Champion {
    rank: number
    name: string
    country: string
    year: number
  }
  
  const champions: Champion[] = [
    { rank: 1, name: "DOUTE Fabien", country: "FR", year: 2032 },
    { rank: 2, name: "HOUILLON Gauthier", country: "FR", year: 2024 },
    { rank: 3, name: "TESSIER Samson", country: "FR", year: 2022 },
    { rank: 4, name: "DESJARDINS Francis", country: "CA", year: 2017 },
    { rank: 5, name: "SANOKO Mamadon", country: "SN", year: 2014 },
    { rank: 6, name: "LACHAUD Jean-François", country: "FR", year: 1994 },
    { rank: 7, name: "SEUNANG P Ulrich", country: "DE", year: 1994 },
    { rank: 8, name: "GUEBEL Jérôme", country: "FR", year: 1993 },
    { rank: 9, name: "MOUILLON Baptiste", country: "FR", year: 1991 },
    { rank: 10, name: "LECUT Guillaume", country: "FR", year: 1991 },
  ]
  
  const countryFlags: { [key: string]: string } = {
    FR: "🇫🇷",
    CA: "🇨🇦",
    SN: "🇸🇳",
    DE: "🇩🇪",
  }
  
  export default function Champions() {
    return (
    <section className="grid grid-cols-2 max-sm:grid-cols-1 gap-8">
            <div className="bg-red-400">
                <img src={champion} alt="" className="w-full h-[45rem] " />
            </div>
            <Card className="w-full mx-0 ">
        <CardHeader>
         
        </CardHeader>
        <CardContent>
          <Table>
            <TableBody>
              {champions.map((champion) => (
                <TableRow
                  key={champion.rank}
                  className="hover:bg-muted/50 even:bg-gray-100 transition-colors"
                >
                  <TableCell className="font-medium">{champion.rank}</TableCell>
                  <TableCell>
                    <div className="flex items-center gap-6 py-2">
                      <span className="text-xl" role="img" aria-label={`Drapeau ${champion.country}`}>
                        {countryFlags[champion.country]}
                      </span>
                      <span>{champion.name}</span>
                    </div>
                  </TableCell>
                  <TableCell className="text-right">{champion.year}</TableCell>
                </TableRow>
              ))}
            </TableBody>
          </Table>
        </CardContent>
      </Card>
    </section>
    )
  }
  
  