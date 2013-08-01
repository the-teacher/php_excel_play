# encoding: UTF-8
puts `clear`

require 'rubygems'
require 'cocaine'
require 'json'

ROOT_PATH      = File.dirname File.absolute_path(__FILE__)

SRC_EXCEL_PATH = ROOT_PATH + "/files/excel_import.xlsx"
READER_SCRIPT  = ROOT_PATH + "/excel2json.php"
TMP_DATA_PATH  = ROOT_PATH + "/files/tmp.json"

line = Cocaine::CommandLine.new(READER_SCRIPT, ":input_file")

begin
  json = line.run(input_file: SRC_EXCEL_PATH)
rescue => e
  puts e.message
end

file = File.open(TMP_DATA_PATH, "w")
file.write(json)
file.close

# output_file: 'out_excel_import.xlsx'
# :output_file
# OUT_EXCEL_PATH = ROOT_PATH + "/files/out_excel_import.xlsx"